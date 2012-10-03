<?php

// Message file for language en
// Generated 2012-10-03 12:28:52

$langCourseAccessHelp = "
<ul>
<li><b><img src='$themeimg/lock_open.png' width=16 height=16> Open Course</b>. The course is publicly accessible without need of user authentication or login.</li>
<li><b><img src='$themeimg/lock_registration.png' width=16 height=16> Registration required</b>.  Users with an account in the platform can register to the course. It is possible to specify a course password to further limit access to only users who have this extra password.</li>
<li><b><img src='$themeimg/lock_closed.png' width=16 height=16> Closed Course</b>. The course is accessible only to users already registered to it. The course administrator can add or remove users from the course.</li>
<li><b><img src='$themeimg/lock_inactive.png' width=16 height=16> Inactive course</b>. Access is allowed <b>only</b> to course teachers - administrators.</li>
</ul>
";
$langWikiSyntaxHelp = "
<h4>Basic syntax</h4>
<p>Creating wiki pages and links between them</p>
<p><strong>Wiki words</strong>: Wiki words are words written like <em>WikiWord</em>. To create a wiki page or a link to a wiki page, edit an existing one and add the title of the page in WikiWord syntax, for example <em>MyPage</em>, then save the page. The Wiki Word <em>MyPage</em> will automatically be replaced with a link to the Wiki page <em>MyPage</em>&nbsp;</p>
<p><strong>Wiki links</strong>: Wiki links are like Hyperlinks (see below) apart from the fact that they do not contain any protocol scheme (like <em>http://</em> or <em>ftp://</em>) and are automatically recognized as links to Wiki pages. To create a new page or create a link to an existing one using Wiki links, edit a page and add <code>[page title]</code> or <code>[name of link|title of page]</code> to its content. You can also use this syntax to change the text of a WikiWord link : <code>[name of link|WikiWord]</code>.</p>
<ul>Hyperlinks
<li><code>[url]</code>, <code>[name|url]</code>, <code>[name|url|language]</code> or <code>[name|url|language|title]</code>.&nbsp;;</li></ul>
<ul>Image inclusion
<li><code>((url|alternate text))</code>, <code>((url|alternate text|position))</code> or <code>((url|alternate text|position|long description))</code>. <br />The position argument can take the following values: L (left), R (right) or C (center). &nbsp;
You can also use the syntax of Hyperlinks. For example <code>[title|image.gif]</code>. This syntax is deprecated, so it is better to consider using the preceding one &nbsp;</li></ul>
<ul>Link to an image
<li>same as Hyperlinks but put a 1 as the fifth argument to avoid uploading an image and get a hyperlink to the image instead. For example <code>[image|image.gif||0]</code> will display a link to image.gif instead of displaying the image itself</li></ul>
<p>Layout</p>
<ul>
<li><strong>Italic</strong>: enclose your text in two straight single quotes <code>\'\'text\'\'</code>&nbsp;</li>
<li><strong>Bold</strong>: enclose your text in three straight single quotes <code>\'\'\'text\'\'\'</code>&nbsp;</li>
<li><strong>Underline</strong>: enclose your text in two underscores <code>__text__</code>&nbsp;</li>
<li><strong>Stroke</strong>: enclose your text in two minus symbols <code>--text--</code>&nbsp;</li>
<li><strong>Title</strong>: <code>!!!</code>, <code>!!</code>, <code>!</code> respectively for titles, sub-titles and sub-sub-titles&nbsp;</li>
<li>List</li>
line starting with <code>*</code> (unordered list) or <code>#</code> (ordered list). You can mix lists (<code>*#*</code>) to create multi-level lists&nbsp;
<li>Paragraph</li>
Separate paragraphs with one or more new lines&nbsp;
</ul>
<h4>Advanced syntax</h4>
<ul>
<li>Footnote</li>
<code>$$ footnote text$$</code>&nbsp;
<li>Preformated text</li>
Begin each line of preformated text with a blank space &nbsp;
<li>Cite block</li>
<code>&gt;</code> or <code>;:</code> before each line &nbsp;
<li>Horizontal line</li>
<code>----</code>&nbsp;
<li>Forced line break</li>
<code>%%%</code>&nbsp;
<li>Acronym</li>
<code>??acronym??</code> or <code>??acronym|definition??</code>&nbsp;
<li>Inline cite</li>
<code>{{cite}}</code>, <code>{{cite|language}}</code> or <code>{{cite|language|url}}</code>&nbsp;
</ul>
</ul>
<p> The 'Inactivation' / 'Activation' link moves the Wiki system from active to inactive and vice versa tools.</p>";
$langWindowClose = "Close window";
$langHDefault = 'Help non available';
$langDefaultContent = '<p>There is no help text available for the platform page you are currently viewing.</p>';
$langPHPMathPublisher = "<p><b>Mathematic symbols support</b></p>
<p>For the incorporation of mathematic symbols in your texts, you can use the <a href='../../manuals/PhpMathPublisherHelp.pdf' target='_blank'>commands</a> (symbolisms) provided by PhpMathPublisher.
More specifically, you may use the text editor in order to insert your content. If the content you import contains mathematic symbols you wish to present, then:</p>
<ol>
  <li>Click the 'Toggle HTML Source' icon.</li>
  <li>Import your mathematic symbols between tags &lt;m>.....&lt;/m></li>
</ol>
<p>Eg., in order to import the square root of a you may type &lt;m>sqrt{a}&lt;/m></p>";
$langHFor = "Forums";
$langHFor_student = $langHFor;
$langForContent = "
<p>To create a new forum, you must first associate it with a category. 
To create a new category, click on 'Add category'. To enter a new discussion forum in a specific category, click on (<img src='$themeimg/add.png' width=16 height=16>) button which is located right of the selected category name.
Enter a title and a description for the forum and click on Add.</p>
<hr>
<p><b>Actions:</b><br><br>
<ul>
  <li>New forum creation. Clicking (<img src='$themeimg/add.png' width=16 height=16>) you can create a new discussion forum.</li>
  <li>Forum modification. Clicking <img src='$themeimg/edit.png' width=16 height=16> you can modify an existing discussion forum.</li>
  <li>Forum deletion. Clicking (<img src='$themeimg/delete.png' width=16 height=16>) you can delete an existing forum.</li>
  <li>Εmail notification if replies are posted. Clicking (<img src='$themeimg/email.png' width=16 height=16>) you select to start or stop receiving email notifications on posts in a specific forum category.</li>
  </ul>
";
$langHInit_student = $langHInit;
$langInit_studentContent = $langInitContent;
$langHDoc = "Documents";
$langHDoc_student = $langHDoc;
$langDocContent = "<p>The Documents tool is similar to the FileManager of your desktop computer.</p><p>You can upload files of any type (HTML, Word, Powerpoint, Excel, Acrobat, Flash, Quicktime, etc.). Your only concern must be that your students have the corresponding software to read them. Some file types may contain viruses, it is your responsibilty not to upload virus contaminated files. It is a worthwhile precaution to check documents with antivirus software before uploading them.</p> <p>Documents are presented in alphabetical order.<br><b>Tip : </b>If you want to present them in a different order, numerate them: 01, 02, 03...</p> <p>You can :</p> <h4>Upload a document</h4> <ul> <li>Select the file on your computer by clicking on 'Upload file'.</li> <li>In the following form use 'Browse'button to search for the file in your computer.</li> <li>Launch the upload with the 'Upload'button  </li> </ul> <h4>Rename a document (a directory)</h4> <ul> <li> Click on the icon 'Rename'(<img src='../../template/classic/img/edit.gif'width=10 height=10 align=baseline>). </li> <li> Type the new name in the field (top left) </li> <li> Validate by clicking 'Rename'button. </li> </ul> <h4> Delete a document (or a directory) </h4> <ul> <li> Click on the icon 'Delete'(<img src='../../template/classic/img/delete.gif'width=10 height=10 align=baseline>)</li> </ul> <h4> Make a document (or directory) invisible to students </h4> <ul> <li> Click on the icon 'Visible/invisible'(<img src='../../template/classic/img/visible.gif'width=10 height=10 align=baseline>)  </li> <li> After that the document (or directory) still exists but it is not visible by students anymore. </li> <li> To make it invisible back again, click on the icon 'Visible/invisible'(<img src='../../template/classic/img/invisible.gif'width=14 height=10 align=baseline>  </li> </ul> <h4> Add or modify a comment to a document (or a directory) </h4> <ul> <li> Click on the 'Comment'icon *(<img src='../../template/classic/img/information.gif'width=10 height=10 align=baseline>)</li> <li> Type new comment in the corresponding field (top right). </li> </ul> <hr> <p> You can organise your content through filing. For this: </p> <h4> <b> Create a directory </b> </h4> <ul> <li> Click on the link 'Create a directory'. </li> <li> Type the name of your new directory in the corresponding field (top left) </li> <li> Validate by clicking 'Create directory'button. </li> </ul> <h4> Move a document (or directory) </h4> <ul> <li> Click on the icon 'Move'(<img src='../../template/classic/img/move_doc.gif'width=10 height=10 align=basename>) </li> <li> Choose the directory into which you want to move the document (or directory) in the corresponding scrolling menu (top left) (note: the word 'root'means you cannot go upper than that level in the document tree of the server). </li> <li> Validate by clicking on 'Move'</li> </ul> </p>";
$langDoc_studentContent = "<p>You can download documents or a directory by clicking on the document/directory name.</p> 
        <h4>Directory download</h4>
        <p>If you wish to dowload the entire documents' directory of a course on your computer, you may click on the <img src='$themeimg/save_s.png' width=16 height=16> icon.</p>";
$langHUser = "Users Administration";
$langUserContent = "<p>Τhis section allows user management and presents information on course users (e.g. the total number of registered users, the number of teachers, etc.).</p>
        <p>To add a user to your course click on 'Add: one user'. In the form presented enter a name or username and click on 'Search'. Then click on 'Register user to course' to register him/her in your course.</p>
         <p>To add multiple users click 'Add: many users', enter their usernames and click on 'Add" to register them to the course.</p>
        <p>To add a guest account click on 'Add: guest user'.
        In the form presented enter a password for the guest account and click on 'Add'.
        <p>To search for a registered user click on 'User Search'. Enter a name or username and click on 'Search'.</p>
        <p>To manage user groups, click on 'Groups Management' so that you will be transferred to the 'Groups' module.</p>
        <p>To provide tutor rights to a registered user click <img src='$themeimg/teacher_add.png' width=24 height=16>.</p>
        <p>To provide co-admin rights to a registered user click <img src='$themeimg/assistant_add.png' width=24 height=16>.</p>               
        <p>To provide group tutor rights to a registered user click <img src='$themeimg/group_manager.png' width=16 height=16>.</p>
        <p>To unregister a user from the course click <img src='$themeimg/cunregister.png' width=16 height=16>.</p>";
$langHGuest = "Guest Account";
$langGuestContent = "<p>By clicking on 'Add guest account' you can create an account for a new guest user.</p>";
$langHQuestionnaire = "Questionnaire";
$langHQuestionnaire_student = $langHQuestionnaire;
$langQuestionnaireContent = "<p>You can create questionnaires with either 'Multiple-choice' questions or 'Gap-fill' questions. 
Click on 'Create Questionnaire' in order to create a new questionnaire. Type a title for the questionnaire and the time interval during which you want this questionnaire to be active.
Then select the type of questions you wish to include, by selecting one of the 'New multiple choice question' or 'New gap fill question' links. 
Click on 'Create Questionnaire' in order to complete the creation procedure.</br>
<p><img src='$themeimg/warning.png' width=18 height=18> <b>Warning</b>: If within an active questionnaire, at least one question has been answered by a student, then the procedure of correction of this questionnaire is accomplished through the creation of a "new" questionnaire (the corrected one). This automatic procedure reassures the questionnaire results reliability.</p>
</p>
<hr>
<p><b>Other actions</b><br>
<ul>
  <li>Questionnaire modification. Click on the (<img src='$themeimg/edit.png' width=16 height=16>) button in order to modify the contents of a questionnaire.</li>
  <li>Questionnaire deletion. Click on the (<img src='$themeimg/delete.png' width=16 height=16>) button in order to delete a questionnaire.</li>
  <li>Visible/invisible. Click on the (<img src='$themeimg/visible.png' width=16 height=16>) in order to make the questionnaire visible or invisible.</li> 
  </ul>";
$langQuestionnaire_studentContent = "<p>Questionnaire is a new module providing interaction between teachers and students. Course teacher create poll questionnaires about the course in order to have feedback from the students.</p>
<p>You will be asked to submit your answers to 'Multiple-choice' and 'Gap-fill' questions. The questionnaire first page displays data such as: the title, creator and creation date, the start and end date, and whether you have already participated in it or not.
To enter the questionnaire and provide answers to it click on its' title.
Once you have answered all questions click 'Submit' to complete the process.</p>";
$langHExercise = "Exercises";
$langHExercise_student = $langHExercise;
$langExerciseContent = "<p>The exercise tool allows you to create exercises that will contains as many questions as
you l
ike.<br><br>
There are various types of answers available for the creation of your questions :<br><br>
<ul>
  <li>Multiple choice (Unique answer)</li>
  <li>Multiple choice (multiple answers)</li>
  <li>Matching</li>
  <li>Fill in the blanks</li>
</ul>
An exercise gathers a certain number of questions under a common theme.</p>
<hr>
<b>Exercise creation</b>
<p>In order to create an exercise, click on the link &quot;New exercise&quot;.<br><br>
Type the exercise name, as well as an optional description of it.<br><br>
You can also choose between 2 exercise types :<br><br>
<ul>
  <li>Questions on an unique page</li>
  <li>One question per page (sequential)</li>
</ul>
and tell if you want or not questions to be randomly sorted at the time of the exercise running.<br><br>
Then, save your exercise. You will go to to the question administration for this exercise.</p>
<hr>
<b>Question adding</b>
<p>You can now add a question into the exercise previously created. The description is optional, as well as the
picture
 that you have the possibility of linking to your question.</p>
<hr>
<b>Multiple choice</b>
<p>This is the famous MAQ (multiple answer question) / MCQ (multiple choice question).<br><br>
In order to create a MAQ / MCQ :<br><br>
<ul>
  <li>Define answers for your question. You can add or delete an answer by clicking on the right button</li>
  <li>Check via the left box the correct answer(s)</li>
  <li>Add an optional comment. This comment won't be seen by the student till this one has replied to the
question</li>
  <li>Give a weighting to each answer. The weighting can be any positive or negatif integer, or zero</li>
  <li>Save your answers</li>
</ul></p>
<hr>
<b>Fill in the blanks</b>

<p>This allows you to create a text with gaps. The aim is to let student find words that you have removed from
the text.<br><br>
To remove a word from the text, and so to create a blank, put this word between brackets [like this].<br><br>
Once the text has been typed and blanks defined, you can add a comment that will be seen by the student when it
replies to the question.<br><br>
Save your text, and you will enter the next step that will allow you to give a weighting to each blank. For
example, if the question worths 10 points and you have 5 blanks, you can give a weighting of 2 points to each
blank.</p>
<hr>
<b>Matching</b>
<p>This answer type can be chosen so as to create a question where the student will have to connect elements from
an unit U1 with elements from an unit U2.<br><br>
It can also be used to ask students to sort elements in a certain order.<br><br>
First define the options among which the student will be able to choose the good answer. Then, define the
questions which will have to be linked to one of the options previously defined. Finally, connect via the drop-down menu
elements from the first unit with those of the second one.<br><br>
Notice: Several elements from the first unit can point to the same element in the second unit.<br><br>
Give a weighting to each correct matching, and save your answer.</p>
<hr>
<b>Exercise modification</b>
<p>In order to modify an exercise, the principle is the same as for the creation. Just click on the picture <img
src=\"
../../template/classic/img/edit.gif\" border=\"0\" align=\"absmiddle\"> beside the exercise to modify, and follow instructions
above.</p>
<hr>
<b>Exercise deleting</b>
<p>In order to delete an exercise, click on the picture <img src=\"../../template/classic/img/delete.gif\" border=\"0\"
align=\"absmiddle\"> beside the exercise to delete.</p>
<hr>
<b>Exercise enabling</b>
<p>So as for an exercise to be used, you have to enable it by clicking on the picture
<img src=\"../../template/classic/img/invisible.gif\" border=\"0\" align=\"absmiddle\"> beside the exercise to enable.</p>
<hr>
<b>Exercise running</b>
<p>You can test your exercise by clicking on its name in the exercise list.</p>
<hr>
<b>Random exercises</b>

<p>At the time of an exercise creation / modification, you can tell if you want questions to be drawn in a random
order among all questions of the exercise.<br><br>
That means that, by enabling this option, questions will be drawn in a different order each time students will
run the exercise.<br><br>
If you have got a big number of questions, you can also choose to randomly draw only X questions among all
questions available in that exercise.</p>
<hr>
<b>Question pool</b>
<p>When you delete an exercise, questions of its own are not removed from the data base, and can be reused into a
new exercise, via the question pool.<br><br>
The question pool also allows to reuse a same questions into several exercises.<br><br>
By default, all questions of your course are shown. You can show the questions related to an exercise, by chosing
this one in the drop-down menu &quot;Filter&quot;.<br><br>
Orphan questions are questions that don't belong to any exercise.</p>";
$langExercise_studentContent = "<p>The excercises first page displays all available exercises. To take an exercise click on the exercise title. After completing it, you will be presented with your score, along with info on the maximum number of attempts allowed or any time limit set for the exercise.";
$langHWork = "Assignments";
$langHWork_student = $langHWork;
$langWorkContent = "<p>Selecting the 'New assignment' option allows you to create an assignment. Type the assignment title, define the submission deadline and optionally add a comment. Then select the assignment type: either 'Individual submissions' (single user assignment) or 'Group submissions' (group assignment). Note that before  you select the 'Group submissions' option, you have to activate the 'Groups' module first.</p>
<p>After you have completed with the assignment creation you can edit it at any time, by clicking on  
<img src='$themeimg/edit.png' border='0' align='middle'> image or delete it clicking on <img src='$themeimg/delete.png' border='0' align='middle'>.
Clicking on an assignment title you are presented with all submissions made on this assignment by registered students.
Information such as StudentID, submission date and the assignment file is presented at this point.
Through the 'Download assignments (in .zip format)' option you can download all document files submitted on an assignment.
To grade one assignment submission enter your grade at the corresponding field next to the student name and click on 'Submit changes'.
You have also the option to add grading comments, while the student is able to view his grade by clicking on the assignment title.</p><hr>";
$langWork_studentContent = "<p>The assignments first page presents all the course assignments created by the teacher.
To submit an assignment click on its title. If you have already submitted an assignment and you want to correct it you should resubmit it (submit the corrected version). The 'old' assignment will be replaced with the 'new' one.</p>
<p>Please note that assignment submissions cannot be made after the deadline.</p>";
$langHGroup = "Groups";
$langHGroup_student = $langHGroup;
$langGroupContent = "<p>This module allows you to create and manage work groups. 
 To create a new user group click on 'Create'. There you have to enter the number of new groups to be created, as well as the number of participants. Then click on the 'Create' button.</p>
 <p>To delete all user groups click on 'Delete'.</p>
 <p>To add all remaining users to the user groups click on 'Fill all groups'.</p>
 <p>To delete all users from all user groups click on 'Purge all groups'.</p>
 <p>When a new group is created it will be displayed under 'Group settings'.
 You can delete a group (clicking on <img src='$themeimg/delete.png' width=16 height=16>) or modify the user list by clicking on <img src='$themeimg/edit.png' width=16 height=16>.</p>
To modify the group settings click on the icon next to 'Groups settings'.
There you can set the group registration type (students can self-register in groups or the course teacher will have to permit registrations). 
Furthermore, you can set whether a group will contain its own forum or not and select whether the access to the group forum will be closed (granted only to group members) or open (granted to everybody).</p>";
$langGroup_studentContent = "<p>All available user groups defined by the course teacher are displayed here. 
To register to a group click 'Registration' (next to the group name).";
$langHAgenda = "Agenda";
$langHAgenda_student = $langHAgenda;
$langAgendaContent = "<p>You can add an event in the Agenda, by clicking on the link 'Add an event'. Type a title and a description for the event, select a date as well as the duration information (in hours) of displaying the event within the Agenda. Click on the 'Add/ / Modify' button to complete the event addition.</p>
        <p>After the addition of an event you can do one of the following:
        <ul>
        <li>Click on image <img src='$themeimg/edit.png' width=16 height=16></li> and modify the event 
        <li>Delete an event by clicking on <img src='$themeimg/delete.png' width=16 height=16></li>
        <li>Click on <img src='$themeimg/visible.png' width=16 height=16></li> and define whether the event will be visible to students  
        <li>Alter the order of presentation of the events  by selecting the 'Oldest first' option.</li>
      </ul>
      </p>
<hr noshade size=1>
<p> $langPHPMathPublisher</p>";
$langAgenda_studentContent = "<p>The Agenda module informs you about the most important events of the course set by the teacher in a chronological order (conferences, meetings, evaluations, etc).</p>";
$langHLink = "Links";
$langHLink_student = $langHLink;
$langLinkContent = "<p>Within this section all links added to your coure are displayed. 
Click on 'Add link' to add a new link. Type the URL, the name and (optionally) a small description for the link. You can also select the category that the link will belong to. Click on the 'Add' button to add the link.</p>
<p>You can organize your links by grouping them in categories. You can add a category by clicking on 'Add category'. Type a name and a description for the category and click on 'Add category' to submit your input.</p>
<hr>
<p>
<ul>
  <li>Click on the <img src='$themeimg/edit.png' width=16 height=16> icon to modify a link.</li>
  <li>Click on the <img src='$themeimg/delete.png' width=16 height=16> icon to delete a link.</li>
  <li>Click on the <img src='$themeimg/up.png' width=16 height=16> and 
          <img src='$themeimg/down.png' width=16 height=16> icons to alter the order of the links' presentation. </li>.
 </ul>";
$langLink_studentContent = "<p>All useful Internet resources - links defined by the course teacher are presented here.</p>";
$langHAnnounce = "Announcements";
$langHAnnounce_student = $langHAnnounce;
$langAnnounceContent = "<p>You can add announcements in a course by clicking in the link 'Add announcement'.</p><p>
Also, you can change the announcement clicking on the icon 'Modify' or delete an announcement clicking on the icon 'Delete'. If you want to mail your announcement to the registered students in your lesson, just check 'Send announcement (via email) to registered students'</p>$langPHPMathPublisher";
$langAnnounce_studentContent = "<p>All announcements added by the course teacher are presented here.</p>
        <p>Clicking on the <img src='$themeimg/feed.png' width=16 height=16> icon allows you to receive automatically the course announcements through RSS (Really Simple Syndication) not only via a computer but also via a mobile phone, as long as an RSS reader is installed.</p>";
$langHProfile = "Modify my profile";
$langProfileContent = "
<p>You can modify your profile data through this module. 
More specifically, you can modify your name, username, e-mail address, StudentID, etc. 
You can also modify your portfolio view by selecting either the 'Advanced' or the 'Brief' option.
You can select to receive or not e-mails from your courses and you can also upload a profile picture by clicking on "Add Picture". Click on 'Modification' to complete with all your changes.</p>
 <p>If you wish to change your password, select the 'Modify password' option.
 Select the 'Course notifications' option in order to select the courses you wish to receive emails from. 
 Click on 'Unregister User' to delete your account.";
$langHModule = "Add external link";
$langModuleContent = "<p>If you want to add an external link presented in the course home page, just type the title and the URL address of the link and click on 'Add'. These links can be deactivated and deleted.</p>";
$langHcourseTools = "Tool Management";
$langcourseToolsContent = "<p>Through this module you can activate or deactivate the course tools. 
Each tool is presented in one of the two columns: 'Inactive tools' and 'Active tools' according to its' status.<br>
In order to change the status of a tool click on the tool name and then click on one of the '>>' and '<<' buttons in order to move it to the other column and change its' status.
For multiple selection of tools use the CTRL-Click action and then move them to the other column. Click on 'Submit changes' to save your changes.</p>";
$langHInfocours = "Course Administration";
$langHConference = "Conference";
$langHConference_student = $langHConference;
$langConferenceContent = "<p>You can exchange messages with the students registered in your course in real time. 
First type your message and then click on <img src='$themeimg/arrow.png' width=16 height=16>.</p>
<p>Click on 'Cleaning' to remove all past messages, or on 'Save' to save all messages in a document file under the course 'Documents'.</p>";
$langConference_studentContent = "<p>Though this module you can communicate in real time with teachers or students of a course. 
Type your message and click on <img src='$themeimg/arrow.png' width=16 height=16>.</p>";
$langHVideo = "Multimedia";
$langHVideo_student = $langHVideo;
$langVideoContent = "
<p>Courses might contain multimedia files. Multimedia files can be distributed either via downloading or streaming. When distributed via downloading there is a significant amount of time for waiting until downloading finishes in order to playback the file. When distributed via streaming there is no wait time and playback starts immediately.</p>
<p><b><u>Instructor Options</u></b></p>
<p>
You can upload multimedia files in several formats like mpeg, avi, flv etc. Choose \"Add\" and type the path to the video file you want or click on \"Browse\" to locate it visually. Optionally you can fill in the \"Title\" & \"Description\" fields. Click on \"Add\" in order to upload the file to the platform. Additionally you can add video links to your courses. Choose \"Add video link\" and then type the link to the file on the streaming server you want to add in the \"URL\" field. Optionally you can fill in the \"Title\" & \"Description\" fields. When finished click on \"Add\". Once added you can modify any of the fields by choosing \"Modify\" or you can delete a file or link by choosing \"Delete\". If there is a streaming server integrated with the platform the process of video files addition is transparent. There is no extra care or action to be done in order the files to be streamed from the streaming server. Keep in mind that video files and links will be available all the time if someone uses the direct url to them.
</p>";
$langVideo_studentContent = "<p>It is a module presenting multimedia educational material. There are two choices, multimedia file or link to video that is stored in a VOD Server (Video on Demand) Server. These two choices are transparent for the students. Every video has a title and a short description.
</p>";
$langHCoursedescription = "Course Description";
$langHCoursedescription_student = $langHCoursedescription;
$langCoursedescriptionContent = "<p>You can add additional information about the course, by selecting the 'Create and Edit' option. 
 Select the category (Course Content, Supplementary Information, etc.) and click on 'Add'.
<ul>        
     <li>Click on <img src='$themeimg/edit.png' width=16 height=16> in order to modify it.</li>
     <li>Click on <img src='$themeimg/delete.png' width=16 height=16> to delete it.</li>
     <li>Click on <img src='$themeimg/unpublish.png' width=16 height=16> icon, to display it on the course home page.</li>
        </ul>
        </p>
<hr>
<p>
$langPHPMathPublisher";
$langCoursedescription_studentContent = "<p>Course description is a module providing useful information about the course.</p>";
$langHPath = "Help - Learning Path";
$langHPath_student = $langHPath;
$langPathContent = "
The Learning Path tool has four functions:
<ul>
<li>Create a learning Path</li>
<li>Import a Scorm or IMS format Learning path</li>
<li>Export a Scorm 2004 or 1.2 compliant Learning path</li>
<li>Track the progress of the students following the Learning paths</li>
</ul>

<p><b>What is a Learning Path ?</b></p>

<p>A Learning Path is a sequence of learning steps included in modules. It can be
content-based (looking like a table of contents) or activities-based, looking like
an agenda or a programme of what you need to do in order to understand and practice a
certain knowledge or know-how.</p>

<p>In addition to being structured, a learning path can
also be sequenced. This means that some steps will constitute pre-requisites for the steps
after them (\"you cannot go to step 2 before step 1\"). Your sequence can only be suggestive
(you show steps one after the other).</p>

<p><b>How to create our own Learning Path ?</b></p>

<p>The first step is to arrive to Learning Path List section. In
the Learning Path List screen, there is a link to it. There you can create
many paths by clicking onto <i>Create a new learning path</i>. But they are
empty, till you add modules and steps to them.</p>

<p><b>What are the steps for these paths ? (What are the items that can be added ?)</b></p>

<p>Some of the Eclass tools, activities and contents that you consider to be useful
and connected to your imagined path can be added:</p>

<ul>
<li>Separate documents (texts, pictures, Office docs, ...)</li>
<li>Labels</li>
<li>Links</li>
<li>Eclass Tests</li>
<li>Eclass Course Description</li>
</ul>

<p><b>Other features of Learning Path</b></p>

<p>Students can be asked to follow (read) your path in a given order. This means
that for example students cannot go to Quiz 2 till they have read Document 1.
All items have a status: completed or incomplete, so the progress of students is
clearly available through the <i>Tracking</i> tool.</p>

<p>If you alter the original title of a step, the new title will appear in
the path, but the original title will not be deleted. So if you want
test8.doc to appear as 'Final Exam' in the path, you do not have to rename
the file, you can use the new title in the path. It is also useful
to give new titles to links as they are too long.</p>
<br>


<p><b>What is a Scorm or IMS format Learning path and how to upload (import) it ?</b></p>

<p>The learning path tool allows you to upload SCORM and IMS compliant course
contents.</p>

<p>SCORM (<i>Sharable Content Object Reference Model</i>) is a public standard
followed by major e-Learning actors like NETg, Macromedia, Microsoft, Skillsoft,
etc. and acting at three levels:</p>

<ul>
<li><b>Economy</b>: Scorm allows whole courses or small content
units to be reusable on different Learning Management Systems (LMS)
through the separation of content and context,</li>
<li><b>Pedagogy</b>: Scorm integrates the notion of
pre-requisite or <i>sequencing</i> (<i>e.g. </i>\"You
cannot go to chapter 2 before passing Quiz 1\"),</li>
<li><b>Technology</b>: Scorm generates a table of contents as
an abstraction layer situated outside content and outside the LMS. It
helps content and LMS communicate with each
other. What is communicated is mainly <i>bookmarks</i> (\"Where is John in the
course ?\"), <i>scoring</i> (\"How did John pass the test ?\") and <i>time</i> (\"How much
time did John spent in chapter 1 ?\").</li>
</ul>

<p><b>How to create a SCORM compliant learning path ?</b></p>

<p>The most natural way is to use the Eclass Learning Path Builder. However, you may want to
create complete Scorm compliant websites locally on your own computer before uploading it
onto your eclass platform. In this case, we recommend the use of a sophisticated tool like
Lectora&reg; or Reload&reg;</p>

<p><b>Useful links</b></p>

<ul>
<li>Adlnet: authority responsible for Scorm normalisation, <a
href=\"http://www.adlnet.org/\">http://www.adlnet.org</a></li>
<li>Reload: Open Source free Scorm player and editor, <a
href=\"http://www.reload.ac.uk/\">http://www.reload.ac.uk</a></li>
<li>Lectora: Scorm publisher authoring software, <a
href=\"http://www.trivantis.com/\">http://www.trivantis.com</a></li>
</ul>

<p><b>Note:</b></p>

<p>The Learning Path section lists all the <i>self-built Learning Paths</i>
and all uploaded <i>Scorm format Learning Paths</i>, as well.</p>
";
$langPath_studentContent = "<p>This module offers the opportunity to the course teacher to create a sequence of steps (learning path) as learning activities, which should be followed by the students.
</p>";
$langHDropbox = "DropBox";
$langHDropbox_student = $langHDropbox;
$langDropboxContent = "<p>Dropbox is a tool exchange file between professors and students. You can exchange various file types (e.g. Word files, Excel, PDF etc.)</p>
<p>There are two folders. In folder <b>Received Files</b>
there are all files you have recieved from other users of the platform with some additional info such as username, file size and file recieved date. In folder <b>Sent files</b> there are files you have sent in other users of platform with similar info.</p>
<p>Note that if you delete a file, file doesn't delete from the platform database but only from this folder.</p>
<p>If you wish to send a file to another user, first select the file from your computer by clicking on 'File Upload'. Optionally you can type a short description. Then select the recipient from the users list and click on 'Send'  You can select more recipients with your mouse and pressing <b>CTRL (Control)</b>.
</p>";
$langDropbox_studentContent = "<p>The Dropbox module is a collaboration tool used by teachers and students to exchange course files. You can send and receive any type of text files, pictures or presentations.
</p>";
$langHUsage = "Usage Statistics";
$langUsageContent = "<p>This module presents course usage statistics information. More specifically,</p>
<p>
<ul>
<li><b>Module Preferences</b>. The user can select to view information on the module preferences (i.e. most visited modules) of a single user or all users, while he can set parameters such as the type of statistics (number of visits, duration) or the time interval (start and end date) for the collected information.</li>
<li><b>User visits</b>. A list of all user visits in the course is presented here. The option to select to view statistics either for one user or for all registered users is given, as well as set a time interval for the displeyed results.</li>
<li><b>User participation</b>. Information on the users participation on the course is presented here.</li>
<li><b>Learning Paths</b>. The users' progress is presented here, as it has been recorded in the 'Learning Path' module.</li>
<li><b>User Group statistics</b>. Useful information on course usage statistics per group is presented here.</li>
</ul>
</p>";
$langHCreateCourse = "Create Course";
$langCreateCourseContent = "<p>The Create Course Wizard is one of the most important tools of the platform. By using this, the user-teacher is able to create new courses in the platform and configure them.</p><p>The wizards consist of 3 steps. Filling in every required field with an asterisk, is mandatory. Under each field, lie exemplary information to help the user filling them in.</p><p>In case the user enters invalid data in a field, the system informs the user and prompts him to correct the error so as to be able to continue with the next step.</p>";
$langHWiki = "Wiki";
$langHWiki_student = $langHWiki;
$langWikiContent = "<p>To create a new Wiki</p> <ul> <li>Click on the 'Create a new Wiki' link. Then enter the Wiki properties:</li> <br>
<li><b>Wiki Title</b>: choose a title for the Wiki</li> <li><b>Wiki Description</b>: choose a description for the Wiki</li> <li><b>Access control management</b>: set the Wiki access control by checking/uncheking the box (see below)</li> </ul> <p>To enter a Wiki click on the Wiki title from the list.</p> <p>To change the properties of a Wiki click on the icon <img src='../../template/classic/img/edit.gif' align='absmiddle' border='0'>.</p>  <p>To delete a Wiki click on the icon <img src='../../template/classic/img/delete.gif' align='absmiddle' border='0'></p>  <p>To get the list of the last modified pages click on the link 'Recent changes'.</p>

<h4>Basic syntax</h4>
<p>Creating wiki pages and links between them</p>
<p><strong>Wiki words</strong>: Wiki words are words written like <em>WikiWord</em>. To create a wiki page or to create a link to a wiki page, edit an existing one and add the title of the page in WikiWord syntax, for example <em>MyPage</em>, then save the page. Automatically the Wiki Word <em>MyPage</em> will be replaced with a link to the Wiki page <em>MyPage</em>&nbsp;;</p>
<p><strong>Wiki links</strong> : Wiki links are like Hyperlinks (see below) except that they do not contain any protocol scheme (like <em>http://</em> or <em>ftp://</em>) and are automatically recognized as links to Wiki pages. To create a new page or create a link to an existing one using Wiki links, edit a page and add <code>[page title]</code> or <code>[name of link|title of page]</code> to its content. You can also use this syntax to change the text of a WikiWord link : <code>[name of link|WikiWord]</code>.</p>
<ul>Hyperlinks
<li><code>[url]</code>, <code>[name|url]</code>, <code>[name|url|language]</code> or <code>[name|url|language|title]</code>.&nbsp;;</li></ul>
<ul>Image inclusion
<li><code>((url|alternate text))</code>, <code>((url|alternate text|position))</code> or <code>((url|alternate text|position|long description))</code>. <br />The position argument can take the following values: L (left), R (right) or C (center). &nbsp;
You can use the syntax as Hyperlinks. For example <code>[title|image.gif]</code>. This syntax is deprecated, consider to use the preceding one &nbsp;</li></ul>
<ul>Link to an image
<li>same as Hyperlinks but put a 1 in fifth argument to avoid image recognition and get an hyperlink to an image. For example <code>[image|image.gif||0]</code> will display a link to image.gif instead of display the image itself</li></ul>
<p>Layout</p>
<ul>
<li><strong>Italic</strong>: surround your text with two single quotes <code>\'\'text\'\'</code>&nbsp;</li>
<li><strong>Bold</strong>: surround your text with three single quotes underscores <code>\'\'\'text\'\'\'</code>&nbsp;</li>
<li><strong>Underline</strong>: surround your text with two underscores <code>__text__</code>&nbsp;</li>
<li><strong>Stroke</strong>: surround your text with two minus symbols <code>--text--</code>&nbsp;</li>
<li><strong>Title</strong>: <code>!!!</code>, <code>!!</code>, <code>!</code> respectively for titles, sub-titles and sub-sub-titles&nbsp;</li>
<li>List</li>
line starting with <code>*</code> (unordered list) or <code>#</code> (ordered list). You can mix lists (<code>*#*</code>) to create multi-level lists&nbsp;
<li>Paragraph</li>
Separate paragraphs with one or more new lines&nbsp;
</ul>

<h4>Advanced syntax</h4>
<ul>
<li>Footnote</li>
<code>$$ footnote text$$</code>&nbsp;
<li>Preformated text</li>
begin each line of preformated text with a blank space&nbsp;
<li>Cite block</li>
<code>&gt;</code> or <code>;:</code> before each line&nbsp;
<li>Horizontal line</li>
<code>----</code>&nbsp;
<li>Forced line break</li>
<code>%%%</code>&nbsp;
<li>Acronym</li>
<code>??acronym??</code> or <code>??acronym|definition??</code>&nbsp;
<li>Inline cite</li>
<code>{{cite}}</code>, <code>{{cite|language}}</code> or <code>{{cite|language|url}}</code>&nbsp;
</ul>
</ul>";
$langWiki_studentContent = "The Wiki module is a new collaboration tool that allows registered users (teachers and students) to create and edit Web page content.
<p>A series of actions is provided to you. More specifically: </p>
<p><b>Recent changes.</b> Through this option you can view all recent modifications made in the Wiki. You can click on 
<img src='$themeimg/wiki.png' align='absmiddle'> 'Main page' to view the Wiki main page, you can click on 
<img src='$themeimg/book.png' align='absmiddle'> 'All pages' to view a list of all Wiki pages, 
or click on <img src='$themeimg/list.png' align='absmiddle'> 'List of Wiki' to view a list with all Wikis.</p>
<p>You can also select to edit the current wiki page you are viewing or see a list of the page's previous revisions.</p>

$langWikiSyntaxHelp";
$langHAddCourseUnitscontent = "Add course unit content";
$langAddCourseUnitscontentContent = "<p class='helptopic'>Here you can add content or resources to the selected course unit. The types of resources that can be added are listed next to the 'Add:' label. By clicking on 'Add', you can find resources of the selected type available in your course. Tick the ones you would like to add and click on 'Add selected'. Newly added resources are immediately listed, with edit and delete icons for each one. Please note that when multiple course units exist in a course, links to the next and previous unit appear automatically. You can also use the selection box below to navigate directly to a specific unit.</p>";
$langHGlossary = "Glossary";
$langHGlossary_student = $langHGlossary;
$langGlossaryContent = "<p>
With module 'glossary' course administrator can define definitions for various keywords in his course.
</p>
<p>You can choose if you want to display term definitions in course pages, clicking in 'Settings' and choose 'Display defintions in course pages'. After that clicking in 'submit'. An informative message is displayed<br />
  <br />
  <strong><u>Add glossary term</u></strong><br />
To add a new glossary term</p>
<ul>
  <li>Click in 'Add term'. A form is displayed.  </li>
  <li>Fill in the term, definition and (optionally) a url </li>
  <li>Click in 'Submit' </li>
</ul>
<p>An informative message is displayed.<br />
  <br />
  <u><strong>Delete term</strong></u><br />
  You can delete a term by clicking in icon with symbol red 'X'. Confirmation is required.<br />
  <br />
  <strong><u>Download glossary terms in </u></strong><strong><u>csv</u>format</strong><br />
 Course administrator can download glossary terms in csv (comma seperated values) format. <br />
</p>
";
$langGlossary_studentContent = "
<p>Glossary displays terms and / or definitions for various keywords in course.</p>
<p>Glossary terms are displayed by hovering the mouse over a term. Also, sometimes, glossary term includes a hyperlink.</p>";
$langHEBook = "E-Book";
$langHEBook_student = $langHEBook;
$langEBookContent = "<h2>&nbsp;&nbsp;E-Book prerequisites (Step 1)</h2>
<p>To create an ebook, you must create some html pages. But you must keep in mind the following rules</p>
<ol>
  <li>Every html page must include a subsection of ebook.</li>
  <li>Html page title must be the title of section</li>
  <li>All html files with pictures and css must be stored in a zip file file.</li>
</ol>
<h2>&nbsp;&nbsp;E-Book creation (Step 2)</h2>

<ol>
  <li>Enter the course as administrator </li>
  <li>From the right menu, click in <strong>E-Book</strong></li>
  <li>Choose <strong>Create</strong> and in the displaying form
    <ul>
      <li>fill in the <strong>Title</strong> of E-Book and</li>
      <li>browse the zip file of html files.</li>
    </ul>
  </li>
    <li>Click in <strong>Submit</strong>.</li>
 <br />

  </li>
</ol>

<h2>&nbsp;&nbsp;Structure of E-Book (Step 3)</h2>

<p>After step 2 a form is displayed with a table of html files found in zip file. Here we'll define the sctructure of E-Book:</p>

<ol>
  <li>First define <strong>sections</strong> of E-Book. You can add as many as you need. Define an <strong>incremental number</strong> and <strong>name</strong> of each section in field <strong>ID</strong> and <strong>Title</strong> correspondingly. </li>

  <li>After that you must format  <strong>subsections</strong> of E-Book. You must
    <ul>
      <li><strong>correspond</strong> each uploaded file with the previous defined sections.</li>
      <li> define in each subsection the incremental number of each subsection in section<br />
</li>
    </ul>  
</li>
  <li>After that click in <strong>Submit</strong>. </li>
  <li>An informative message will be displayed.</li>
</ol>
<h2>&nbsp;&nbsp;E-Book browsing</h2>

<p>Click in the desired E-Book name</p> 

<h2>&nbsp;&nbsp;Modify - Delete of E-Book</h2>
<p>If you want to modify an E-Book click in icon <strong> Modify </strong>. <br />
<br />
In order to <strong>delete</strong> an E-Book click in icon <strong>Delete</strong>.</p>
<h2>&nbsp;&nbsp;Administration of html files</h2>
<p>If you want to administrate the uploaded html files in an E-Book then  </p>
<ul>
  <li>click in icon <strong> Modification </strong>,</li>
  <li>choose <strong>File administration</strong>. A page with all uploaded html files will be displayed</li>
  <li>you can administrate files and directories as in module 'Documents'.</li>

</ul>
<h2>&nbsp;&nbsp;Linking E-Book with course units</h2>
<p>You can link a course unit with a <strong>section</strong> of <strong>E-Book</strong>. For accomplishing this click in course unit and from the available tools choose <strong>Add E-Book</strong>. From the displaying form choose the desired E-Book section. After that click in <strong>Add selection</strong>. </p>
";
$langEBook_studentContent = "
<h2>&nbsp;&nbsp;Browse</h2>
<p>Click from left menu 'Ebook'. A list of ebook will be displayed. To browse an ebook just click in it.</p>
";
$langFor_studentContent = 
"
<p>The platform allows you to communicate with all other course students.</p>
You can either create a new discussion topic by clicking "New topic" (after you have first selected the corresponding discussion area), or reply to an existing topic by clicking 'Reply'.
Υou can also click on (<img src='$themeimg/email.png' width=16 height=16>) in order to start or stop receiving email notifications for new posts in a specific topic or forum category.</li>";
$langHMyAgenda = "My Agenda";
$langMyAgendaContent = "$langAgenda_studentContent";
$langHPersonalStats = 'Personal Statistics';
$langPersonalStatsContent = "<p>The number and duration of visits per course is presented here.</p>";
$langInfocoursContent = "
<p>You can modify/edit several course parameters, namely Course code, Title, Teachers, Faculty, etc.</p>
<p>You can also modify the course Access Type. The available types of access are: 
$langCourseAccessHelp
</p>
<p>You can select the language in which the course messages will be presented.</p>
<p>Click on  'Submit' when you finish with all modifications.</p>
<p>Other actions:
<ul>
<li><b>Archive this course:</b> You can create a backup file for the course and then download it and save it locally on your computer. In case you want to recover the course content you have to contact the platform administrator.</li>
<li><b>Course deletion:</b> You can delete a course and permanently delete all the documents it contains and unregister all its students (Please note that students will not be unregistered from other courses). 
</li>
<li><b>Refresh Course:</b> You may selectively remove some of the course contents so as to prepare it for the next academic year.</li>
</ul>
</p>";
$langHGroupSpace = "User Groups";
$langGroupSpaceContent = "<p>To correct the user group info click on 'Edit this group'.
        Clicking on 'Forum' you enter the 'Forum' area where a distinct forum has been created for each user group. Click on 'Documents of the Group' in order to add or remove documents related to the group. Please note that these documents are only related to the specific group and have no relation with the 'Documents' module of the platform main screen.
        You may send an email to all users within a group by clicking on 'Email to group' selection.
         You may also view the group usage statistics by clicking on 'Usage Statistics'.</p>";
