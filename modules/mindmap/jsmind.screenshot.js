/*
 * Released under BSD License
 * Copyright (c) 2014-2015 hizzgdev@163.com
 * 
 * Project Home:
 *   https://github.com/hizzgdev/jsmind/
 */

(function($w){
    'use strict';

    var __name__ = 'jsMind';
    var jsMind = $w[__name__];
    if(!jsMind){return;}
    if(typeof jsMind.screenshot != 'undefined'){return;}

    var $d = $w.document;
    var $c = function(tag){return $d.createElement(tag);};

    var css = function(cstyle,property_name){
        return cstyle.getPropertyValue(property_name);
    };
    var is_visible = function(cstyle){
        var visibility = css(cstyle,'visibility');
        var display  = css(cstyle,'display');
        return (visibility !== 'hidden' && display !== 'none');
    };
    var jcanvas = jsMind.util.canvas;
    jcanvas.rect = function (ctx,x,y,w,h,r) {
        if (w < 2 * r) r = w / 2;
        if (h < 2 * r) r = h / 2;
        ctx.moveTo(x+r, y);
        ctx.arcTo(x+w, y,   x+w, y+h, r);
        ctx.arcTo(x+w, y+h, x,   y+h, r);
        ctx.arcTo(x,   y+h, x,   y,   r);
        ctx.arcTo(x,   y,   x+w, y,   r);
    };

    jcanvas.text_multiline = function(ctx,text,x,y,w,h,lineheight){
        var line = '';
        var text_len = text.length;
        var chars = text.split('');
        var test_line = null;
        ctx.textAlign = 'left';
        ctx.textBaseline = 'top';
        for(var i=0;i<text_len;i++){
            test_line = line + chars[i];
            if(ctx.measureText(test_line).width > w && i>0){
                ctx.fillText(line,x,y);
                line = chars[i];
                y += lineheight;
            }else{
                line = test_line;
            }
        }
        ctx.fillText(line,x,y);
    };

    jcanvas.text_ellipsis = function(ctx,text,x,y,w,h){
        var center_y = y+h/2;
        var text = jcanvas.fittingString(ctx,text,w);
        ctx.textAlign = 'left';
        ctx.textBaseline = 'middle';
        ctx.fillText(text,x,center_y,w);
    };

    jcanvas.fittingString = function(ctx,text,max_width) {
        var width = ctx.measureText(text).width;
        var ellipsis = '…'
        var ellipsis_width = ctx.measureText(ellipsis).width;
        if (width<=max_width || width<=ellipsis_width) {
            return text;
        } else {
            var len = text.length;
            while (width>=max_width-ellipsis_width && len-->0) {
                text = text.substring(0, len);
                width = ctx.measureText(text).width;
            }
            return text+ellipsis;
        }
    };

    jsMind.screenshot = function(jm){
        this.jm = jm;
        this.canvas_elem = null;
        this.canvas_ctx = null;
        this._inited = false;
    };

    jsMind.screenshot.prototype = {
        init:function(){
            if(this._inited){return;}
            console.log('init');
            var c = $c('canvas');
            var ctx = c.getContext('2d');

            this.canvas_elem = c;
            this.canvas_ctx = ctx;
            this.jm.view.e_panel.appendChild(c);
            this._inited = true;
            this.resize();
        },

        shoot:function(mind_name){
            this.init();
            this._draw();
            this._watermark();
            this._download(mind_name);
            this.clean();
        },

        shootAsDataURL:function(name){
            this.init();
            this._draw();
            this._watermark();
            var url = this.canvas_elem.toDataURL();
		
		//image post in document in base64 format//
			$.ajax({
			  type: "POST",
			  url: "../document/index.php",
			  data: { 
				 imgBase64: url,
				 imgname: name
			  }
			}).done(function(o) {
			 // console.log('saved'); 
			});
            this.clean();
            return url;
        },

        resize:function(){
            if(this._inited){
                this.canvas_elem.width=this.jm.view.size.w;
                this.canvas_elem.height=this.jm.view.size.h;
            }
        },

        clean:function(){
            var c = this.canvas_elem;
            this.canvas_ctx.clearRect(0,0,c.width,c.height);
        },

        _draw:function(){
            var ctx = this.canvas_ctx;
            ctx.textAlign = 'left';
            ctx.textBaseline = 'top';
            this._draw_lines();
            this._draw_nodes();
        },

        _watermark:function(){
            var c = this.canvas_elem;
            var ctx = this.canvas_ctx;
            ctx.textAlign='right';
            ctx.textBaseline='bottom';
            ctx.fillStyle='#000';
            ctx.font='11px Verdana,Arial,Helvetica,sans-serif';
            ctx.fillText('hizzgdev.github.io/jsmind',c.width-5.5,c.height-2.5);
            ctx.textAlign='left';
            ctx.fillText($w.location,5.5,c.height-2.5);
        },

        _draw_lines:function(){
            this.jm.view.show_lines(this.canvas_ctx);
        },

        _draw_nodes:function(){
            var nodes = this.jm.mind.nodes;
            var node;
            for(var nodeid in nodes){
                node = nodes[nodeid];
                this._draw_node(node);
            }
        },

        _draw_node:function(node){
            var ctx = this.canvas_ctx;
            var view_data = node._data.view;
            var node_element = view_data.element;
            var ncs = getComputedStyle(node_element);
			
			
			
            if(!is_visible(ncs)){ return; }

            var bgcolor = css(ncs,'background-color');
			//console.log(bgcolor);
            var round_radius = parseInt(css(ncs,'border-radius'));
            var color = css(ncs,'color');
            var font = css(ncs,'font');
            var padding_left = parseInt(css(ncs,'padding-left'));
            var padding_right = parseInt(css(ncs,'padding-right'));
            var padding_top = parseInt(css(ncs,'padding-top'));
            var padding_bottom = parseInt(css(ncs,'padding-bottom'));
            var text_overflow = css(ncs,'text-overflow');

            var rb = {x:view_data.abs_x,
                      y:view_data.abs_y,
                      w:view_data.width+1,
                      h:view_data.height+1};
            var tb = {x:rb.x+padding_left,
                      y:rb.y+padding_top,
                      w:rb.w-padding_left-padding_right,
                      h:rb.h-padding_top-padding_bottom};

            ctx.font=font;
            ctx.fillStyle = bgcolor;
            ctx.beginPath();
            jcanvas.rect(ctx, rb.x, rb.y, rb.w, rb.h, round_radius);
            ctx.closePath();
            ctx.fill();

            ctx.fillStyle = color;
            if(text_overflow === 'ellipsis'){
                jcanvas.text_ellipsis(ctx, node.topic, tb.x, tb.y, tb.w, tb.h);
            }else{
                var line_height = parseInt(css(ncs,'line-height'));
                jcanvas.text_multiline(ctx, node.topic, tb.x, tb.y, tb.w, tb.h,line_height);
            }

            if(!!view_data.expander){
                this._draw_expander(view_data.expander);
            }
        },

        _draw_expander:function(expander){
            var ctx = this.canvas_ctx;
            var ncs = getComputedStyle(expander);
            if(!is_visible(ncs)){ return; }

            var style_left = css(ncs,'left');
            var style_top = css(ncs,'top');
            var font = css(ncs,'font');
            var left = parseInt(style_left);
            var top = parseInt(style_top);
            var is_plus = expander.innerHTML === '+';

            ctx.lineWidth = 1;

            ctx.beginPath();
            ctx.arc(left+7,top+7,5,0,Math.PI*2,true);
            ctx.moveTo(left+10,top+7);
            ctx.lineTo(left+4,top+7);
            if(is_plus){
                ctx.moveTo(left+7,top+4);
                ctx.lineTo(left+7,top+10);
            }
            ctx.closePath();
            ctx.stroke();
        },

        _download:function(mind_name){
            var c = this.canvas_elem;
            var name = this.jm.mind.name;

			
            if (navigator.msSaveBlob && (!!c.msToBlob)) {
                var blob = c.msToBlob();
                navigator.msSaveBlob(blob,name);
            } else {
                var bloburl = this.canvas_elem.toDataURL();
                var anchor = $c('a');
                if ('download' in anchor) {
                    anchor.style.visibility = 'hidden';
                    anchor.href = bloburl;
                    //anchor.download = this.jm.mind.name;
					anchor.download = mind_name ;
                    $d.body.appendChild(anchor);
                    var evt = $d.createEvent('MouseEvents');
                    evt.initEvent('click', true, true);
                    anchor.dispatchEvent(evt);
                    $d.body.removeChild(anchor);
                } else {
                    location.href = bloburl;
                }
            }
        },

        jm_event_handle:function(type,data){
            if(type === jsMind.event_type.resize){
                this.resize();
            }
        }
    };

    var screenshot_plugin = new jsMind.plugin('screenshot',function(jm){
        var jss = new jsMind.screenshot(jm);
        jm.screenshot = jss;
        jm.shoot = function(mind_name){
            jss.shoot(mind_name);
		};
		jm.shootAsDataURL = function(test){
			jss.shootAsDataURL(test);
        };
        jm.add_event_listener(function(type,data){
            jss.jm_event_handle.call(jss,type,data);
        });
    });

    jsMind.register_plugin(screenshot_plugin);

})(window);