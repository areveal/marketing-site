<?php

function nina_cross_promo_defaults() {
	return array (
  'css' => '/*** GLOBAL STYLES ***/
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
body {
	font-family: $font1;
	font-size: $f5;
	line-height: $h5;
	color: $c_primary_text;
	background-color: $c_primary;
}
a {
	color: $c_links;
}
a:hover {
	text-decoration: none;
}
code, pre {
	font-family: Consolas, Monaco, Menlo, Courier, Verdana, sans-serif;
}
.full_width {
	min-width: $w_total;
}
.inner {
	position: relative;
	width: $w_total;
	margin: 0 auto;
}
img.avatar {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}
.clear:after, .inner:after, .byline:after, .author_description:after, .comment_nav:after {
	content: \\\'\\\';
	display: table;
	clear: both;
}
/*** ICON FONT ***/
@font-face {
	font-family: \\\'FontAwesome\\\';
	src: url(\\\'font/fontawesome-webfont.eot?v=3.2.1\\\');
	src: url(\\\'font/fontawesome-webfont.eot?#iefix&v=3.2.1\\\') format(\\\'embedded-opentype\\\'), url(\\\'font/fontawesome-webfont.woff?v=3.2.1\\\') format(\\\'woff\\\'), url(\\\'font/fontawesome-webfont.ttf?v=3.2.1\\\') format(\\\'truetype\\\'), url(\\\'font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1\\\') format(\\\'svg\\\');
	font-weight: normal;
	font-style: normal;
}
[class^=\\"icon-\\"] {
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  text-decoration: inherit;
  *margin-right: 0.3em;
}
/*** HEADER ***/
#header {
	background-color: $c_primary;
	border-bottom: 5px solid $mask3;
	padding: ($x05 + $x025) 0;
}
#header a:hover {
	color: $c_accent_1;
}
#site_title {
	float: left;
	font-family: $font3;
	font-size: $f3;
	line-height: 1em;
}
#site_title:hover {
	position: relative;
	bottom: -1px;
}
#site_title a {
	text-decoration: none;
	color: $c_bg;
}
#site_tagline {
	display: inline-block;
	font-size: $f6;
	line-height: $f3;
	color: $c_bg;
	margin-left: $x05;
	border-left: 1px solid $c_bg;
	padding-left: $x05;
}
/*** NAV MENU ***/
.navigation {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	height: 50%;
	min-height: $f3;
	margin: auto 0;
}
.menu {
	list-style: none;
	display: inline-block;
}
.menu a {
	text-decoration: none;
}
.menu > li {
	display: inline-block;
}
.menu-main a {
	$menu
	color: $c_bg;
	letter-spacing: 1px;
	text-transform: uppercase;
	padding: $x05 $x025;
}
.menu_control {
	display: none;
}
.sub-menu {
	display: none;
	position: absolute;
	z-index: 100;
}
.sub-menu {
	width: $w_submenu;
}
.sub-menu li {
	position: relative;
}
.sub-menu a {
	display: block;
	font-weight: 500;
	color: $c_primary_text;
	padding: $x025 $x05;
}
#header .sub-menu a:hover {
	color: $c_primary_text;
	background-color: $c_accent_2;
}
.sub-menu .sub-menu {
	top: -($x025 + 1);
	left: $w_submenu;
}
.menu > li > .sub-menu {
	margin-top: $x025;
}
.menu li:hover > .sub-menu {
	display: block;
}
.menu-main .sub-menu {
	list-style: none;
	background-color: $c_bg;
	border: 1px solid $c_accent_1;
	padding: $x025 0;
}
.menu-main .sub-menu:before {
	content: \\\'\\\';
	position: absolute;
}
.menu-main .sub-menu:before {
	top: -$x025;
	left: $x05;
	z-index: 3;
	border: $x025 solid transparent;
	border-top-width: 0;
	border-bottom-color: $c_bg;
}
.sub-menu ul:before {
	display: none;
}
.sidebar .menu li {
	display: block;
}
/*** CONTENT AREA STRUCTURE ***/
#content_box {
	background-color: $c_bg;
	padding: $x15 0;
	overflow: hidden;
}
.content {
	float: $col1;
	width: $w_content;
}
.sidebar {
	float: $col2;
	width: $w_sidebar;
}
/*** BASIC GRT WITH SPACED PARAGRAPHS & HALF-SPACED LISTS ***/
.grt, .grt h4 {
	font-size: $f5;
	line-height: $h5;
}
.grt .headline, .grt h2, .grt h3, .grt h4 {
	font-family: $font2;
}
.grt .headline {
	font-size: $f2;
	line-height: $h2;
}
.grt .headline, .grt h2 {
	font-weight: 300;
}
.grt h2 {
	font-size: $f3;
	line-height: $h3;
	margin-top: $x15;
	margin-bottom: $x05;
}
.grt h3 {
	font-size: $f4;
	line-height: $h4;
}
.grt .small, .grt .caption {
	font-size: $f6;
	line-height: $h6;
}
.grt .drop_cap {
	float: left;
	font-size: $x2;
	line-height: 1em;
	margin-right: 0.15em;
}
.grt p, .grt ul, .grt ol, .grt blockquote, .grt pre, .grt dl, .grt dd, .grt .center, .grt .block, .grt .caption, .grt .aligncenter, .grt .alignnone, .grt .left, .grt .alignleft, .grt .right, .grt .alignright, .grt .post_image, .grt .post_image_box, .grt .wp-caption, .grt .wp-post-image, .grt .alert, .grt .note, .headline_area, .archive_intro .headline, .archive_content, .post_list, .post_list li, .prev_next {
	margin-bottom: $x1;
}
.grt ul, .grt ol, .grt .right, .grt .alignright, .grt .stack {
	margin-left: $x1;
}
.grt .wp-caption > img, .grt .post_image_box .post_image, .grt .thumb, .grt blockquote.right, .grt blockquote.left, .grt li {
	margin-bottom: $x05;
}
.grt ul ul, .grt ul ol, .grt ol ul, .grt ol ol {
	margin-top: $x05;
}
.grt ul ul, .grt ul ol, .grt ol ul, .grt ol ol, .wp-caption p, .grt .alert p:last-child, .grt .note p:last-child, .grt blockquote.right p, .grt blockquote.left p {
	margin-bottom: 0;
}
.grt .left, .grt .alignleft {
	margin-right: $x1;
}
.grt .caption {
	color: $c_secondary_text;
	margin-top: -$x05;
}
.grt ul > li {
	list-style-image: url(\\\'images/list.png\\\');
}
.grt dt {
	font-weight: bold;
}
/*---:[ golden ratio pullquotes ]:---*/
.grt blockquote.right, .grt blockquote.left {
	width: 45%;
	font-size: $f3;
	line-height: $pullquote;
}
.grt blockquote.right, .grt blockquote.left { 
	border: none;
	padding-left: 0;
}
/*** POST BOX STYLES ***/
.post_box {
	margin-bottom: $x2;
}
.post_box a:hover {
	background-color: $c_accent_2;
}
.headline-container {
	position: relative;
	margin-bottom: $x1;
}
.headline-container .headline {
	margin-bottom: $x025;
}
.headline, .headline a {
	text-decoration: none;
	color: $c_primary;
}
.headline a {
	display: block;
}
.headline a:hover {
	color: $c_links;
}
.byline {
	font-size: $f6;
	line-height: $h6;
	color: $c_secondary_text;
	border: 1px solid $c_accent_1;
	border-width: 1px 0;
	padding: $x025 0;
}
.byline a {
	text-decoration: none;
}
.headline-container .post_edit {
	text-decoration: none;
}
.byline span, .byline .post_edit {
	margin-left: $x025;
}
.byline span:first-child {
	margin-left: 0;
}
.byline p {
	margin-bottom: 0;
}
.post_author:before, .post_date:before, .post_edit:before, .comment_edit:before, .num_comments_link:before, .twitter_profile:before, .post_cats:before, .post_tags:before {
	font-family: \\\'FontAwesome\\\';
}
.post_author:before {
	content: \\\'\\\\f007\\\\0020\\\';
}
.post_date:before {
	content: \\\'\\\\f073\\\\0020\\\';
}
.post_edit:before, .comment_edit:before {
	content: \\\'\\\\f044\\\\0020\\\';
	color: $c_secondary_text;
}
.num_comments_link:before {
	content: \\\'\\\\f086\\\\0020\\\';
	color: $c_secondary_text;
}
.twitter_profile:before {
	content: \\\'\\\\f099\\\\0020\\\';
}
.post_cats:before {
	content: \\\'\\\\f07c\\\\0020\\\';
}
.post_tags:before {
	content: \\\'\\\\f02c\\\\0020\\\';
}
.byline .num_comments_link {
	float: right;
}
.byline .avatar {
	position: absolute;
	top: $x025;
	$avatar
	width: $x15;
	height: $x15;
}
.post_box blockquote {
	color: $c_secondary_text;
	border-left: 1px solid $c_secondary_text;
	padding-left: $x1;
}
.post_box pre {
	line-height: $pre;
}
.post_box code, .post_box pre {
	background-color: #fffbcc;
}
.post_box .alert, .post_box .note, .post_box pre {
	border: 1px solid $c_accent_1;
	padding: $x1;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.post_box .alert {
	background-color: #ffd1d1;
	border-color: $mask2;
}	
.post_box .note {
	background-color: $c_accent_2;
}
.post_box .frame, .post_box .wp-caption {
	background-color: $c_accent_2;
	border: 1px solid $c_accent_1;
	padding: $x05;
}
.post_box .wp-caption-text {
	font-size: $f6;
	line-height: $h6;
	text-align: center;
	margin-top: $x05;
}
.post_box .author_description {
	margin-top: $x1;
	border-top: 1px solid $c_accent_1;
	padding-top: $x1;
}
.author_description .avatar {
	float: left;
	$bio_avatar
	margin-right: $x05;
	margin-bottom: $x025;
}
.author_description_intro {
	font-weight: bold;
}
.post_box .widget_title {
	font-family: $font2;
	font-size: $f4;
	line-height: $h4;
	margin: $x15 0 $x05;
}
/*** SPECIAL TEMPLATE STYLES ***/
.archive_intro {
	margin-bottom: 0;
}
.post_list {
	list-style: none;
	border-top: 1px solid $c_accent_1;
	padding-top: $x1;
}
.post_list .headline {
	font-family: $font2;
	font-size: $f4;
	line-height: $h4;
}
.post_list a {
	text-decoration: none;
}
.post_list a:hover {
	background-color: $c_accent_2;
}
.post_list .num_comments_link, .post_list .post_edit {
	font-size: $f6;
	line-height: $h6;
}
.post_list .num_comments_link {
	margin-right: $x025;
}
.landing .inner {
	width: $w_content;
}
.landing .inner, .no-sidebars .content {
	margin: 0 auto;
}
.landing #site_title, .no-sidebars .content {
	float: none;
}
.cgrt .grt h1, .cgrt .grt h2, .cgrt .grt h3, .cgrt .grt h4, .cgrt .grt h5, .landing #site_title, .landing .headline-container, .landing #footer {
	text-align: center;
}
.landing .post_box, .landing .promo:last-child, .no-sidebars .post_box {
	margin-bottom: 0;
}
.no-sidebars .prev-next {
	margin-top: $x1;
}
/*** PREVIOUS NEXT ***/
.prev-next {
	font-size: $f6;
	line-height: $h6;
	text-transform: uppercase;
	background-color: $c_accent_2;
	margin-bottom: -$x15;
	border-bottom: 5px solid $mask1;
	padding: $x05 $x1;
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
.next_posts {
	float: right;
}
.previous_posts:before, .next_posts:after, .previous_comments:before, .next_comments:after, .comments_closed:before {
	font-family: \\\'FontAwesome\\\';
	color: $c_secondary_text;
}
.previous_posts:before, .previous_comments:before {
	content: \\\'\\\\f0d9\\\\0020\\\';
}
.next_posts:after, .next_comments:after {
	content: \\\'\\\\0020\\\\f0da\\\';
}
/*** COMMENTS ***/
#comments {
	margin-top: $x2;
}
#comments .comments_intro, #comments .comments_closed {
	margin-bottom: $x05;
}
#comments .comments_closed {
	color: $c_secondary_text;
}
.comments_closed:before {
	content: \\\'\\\\f06a\\\\0020\\\';
}
.comment_nav {
	margin: -$x1 0 $x1;
	border-bottom: 2px solid $c_accent_1;
	padding: $x05 0;
}
.comment_nav a {
	text-decoration: none;
}
.next_comments {
	float: right;
}
.comment_list, .children {
	list-style: none;
}
.comment_list .children {
	margin: $x1 0 0 ($x1 + 1);
}
.comment_list > li > .children {
	margin-left: 0;
}
#comments .comment_list {
	margin-left: 0;
}
.comment_list .comment {
	list-style-image: none;
	margin-bottom: $x1;
}
.comment_list > .comment {
	border-bottom: 2px solid $c_accent_1;
	padding-bottom: $x1;
}
.comment_list > .comment:first-child {
	border-top: 2px solid $c_accent_1;
	padding-top: $x1;
}
.children > .comment:last-child {
	margin-bottom: 0;
}
.children .comment-container {
	border-left: 1px solid $c_accent_1;
	padding-left: $x1;
}
.children .bypostauthor .comment-container {
	border-color: $c_secondary_light;
}
.comment-byline a {
	text-decoration: none;
	margin-left: $x05;
}
.comment_author {
	font-family: $font2;
	font-size: $f4;
	line-height: $h4;
}
.comment_author a {
	margin-left: 0;
}
.comment .avatar {
	float: right;
	width: $x2;
	height: $x2;
}
.comment_permalink {
	font-family: \\\'FontAwesome\\\';
}
.comment_date, .comment_permalink, .comment_edit {
	font-size: $f6;
	line-height: $h6;
}
.comment_date {
	display: block;
	color: $c_secondary_text;
}
.comment_text {
	margin-top: $x1;
}
.comment_text :last-child {
	margin-bottom: 0;
}
/*** INPUT DEFAULTS ***/
.input_text, input[type=\\"text\\"] {
	font-family: inherit;
	font-size: inherit;
	line-height: 1em;
	font-weight: inherit;
	color: $c_primary_text;
	background-color: $c_bg;
	border: 1px solid $c_accent_1;
	padding: 0.35em;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
textarea.input_text {
	line-height: $h5;
}
#author, #email, #url, .thesis_email_form_name, .thesis_email_form_email {
	background-repeat: no-repeat;
	background-position: $x025;
	padding: $x025 $x025 $x025 $x1;
}
#author, .thesis_email_form_name {
	background-image: url(\\\'images/user.png\\\');
}
#email, .thesis_email_form_email {
	background-image: url(\\\'images/email.png\\\');
}
#url {
	background-image: url(\\\'images/link.png\\\');
}
::-webkit-input-placeholder {
   color: $c_secondary_text;
}
.input_submit, input[type=\\"submit\\"] {
	font-family: inherit;
	font-size: inherit;
	cursor: pointer;
	overflow: visible;
	-webkit-appearance: none;
}
/*** COMMENT FORM ***/
#commentform {
	margin-top: $x1;
}
.comment_form_title {
	font-family: $font2;
	font-size: $f4;
	line-height: $h4;
}
#commentform p {
	margin-bottom: $x05;
}
#commentform .input_submit, .comment-reply-link, #cancel-comment-reply-link {
	padding: $x025 $x05;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
#commentform .input_submit {
	color: $c_bg;
	background-color: $c_secondary_dark;
	border: 1px solid $c_primary;
}
#commentform .input_submit:hover {
	background-color: $c_primary;
}
.comment-reply-link, #cancel-comment-reply-link {
	background-color: $c_accent_2;
	border: 1px solid $c_accent_1;
	text-decoration: none;
}
.comment-reply-link {
	display: inline-block;
	line-height: 1em;
	margin-top: $x1;
}
#cancel-comment-reply-link {
	margin-left: $x05;
}
#commentform #comment_form_submit {
	display: inline-block;
	margin-bottom: 0;
}
#commentform + .comment-reply-link {
	display: none;
}
#commentform .input_text {
	width: 40%;
}
#commentform textarea.input_text {
	display: block;
	width: 100%;
	padding: $x025;
}
/*** SIDEBAR ***/
.sidebar {
	$sidebar
}
.sidebar .headline, .sidebar .widget_title {
	$sidebar_heading
}
.sidebar .widget_title, .sidebar .email_form_title, .sidebar .email_form_intro {
	margin-bottom: $sx05;
}
.sidebar p, .sidebar ul, .sidebar ol, .sidebar blockquote, .sidebar pre, .sidebar dl, .sidebar dd, .sidebar .headline, .sidebar .left, .sidebar .alignleft, .sidebar .right, .sidebar .alignright, .sidebar .center, .sidebar .aligncenter, .sidebar .block, .sidebar .alignnone {
	margin-bottom: $sx1;
}
.sidebar .left, .sidebar .alignleft {
	margin-right: $sx1;
}
.sidebar ul ul, .sidebar ul ol, .sidebar ol ul, .sidebar ol ol, .sidebar .right, .sidebar .alignright, .sidebar .stack {
	margin-left: $sx1;
}
.sidebar .thesis_email_form .input_text, .sidebar .widget li {
	margin-bottom: $sx05;
}
.sidebar .post_content, .sidebar .widget li ul, .sidebar .widget li ol {
	margin-top: $sx05;
}
.sidebar ul ul, .sidebar ul ol, .sidebar ol ul, .sidebar ol ol, .wp-caption p, .sidebar .post_excerpt p {
	margin-bottom: 0;
}
.sidebar input[type=\\"text\\"] {
	width: 100%;
	margin-bottom: $sx05;
	padding: $x025;
}
.sidebar input[type=\\"submit\\"] {
	color: $c_bg;
	background-color: $c_secondary_dark;
	border: none;
	padding: $x025;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.sidebar input[type=\\"submit\\"]:hover {
	background-color: $c_primary;
}
.sidebar .search_form input[type=\\"text\\"] {
	margin-bottom: 0;
}
.sidebar .search_form input[type=\\"submit\\"] {
	margin-top: $sx05;
}
.sidebar .query_box .post_author, .sidebar .query_box .post_date {
	color: $c_secondary_text;
}
.sidebar .widget ul {
	list-style-type: none;
	margin-bottom: 0;
}
.sidebar .widget li:last-child {
	margin-bottom: 0;
}
.sidebar .widget li a {
	text-decoration: none;
}
.sidebar .widget li a:hover {
	text-decoration: underline;
}
.sidebar .widget, .sidebar .text_box {
	background-color: $c_accent_2;
	border-bottom: 5px solid $mask1;
	padding: $sx1;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.sidebar .widget, .sidebar .text_box, .sidebar .thesis_email_form, .sidebar .query_box {
	margin-bottom: $sx15;
}
/*** FEATURE: TABBED POSTS ***/
.sidebar .widget .tabs {
	list-style-type: none;
	margin-bottom: $sx1;
}
.widget .tabs .tab {
	float: left;
	line-height: 1em;
	color: $c_links;
	margin: 0 $sx05 0 0;
	padding: $sx05;
	cursor: pointer;
}
.tabs .tab:last-child {
	margin-right: 0;
}
.widget .tabs .active, .widget .tabs .tab:hover {
	color: $c_bg;
	text-decoration: none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.tabs .active, .tabs .tab:hover {
	background-color: $c_primary;
}
.widget .tabbed_posts {
	display: none;
	list-style: none;
	margin-bottom: 0;
}
.tabbed_posts li:last-child {
	margin-bottom: 0;
}
.widget .posts_active {
	display: block;
}
/*** EMAIL FORMS ***/
.thesis_email_form {
	position: relative;
}
.email_form_title {
	font-family: $font2;
	font-size: inherit;
	line-height: inherit;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.email_testimonial {
	display: block;
	font-style: italic;
}
.thesis_email_form input[type=\\"text\\"] {
	border: none;
	padding: $x025 $x025 $x025 $x1;
}
.thesis_email_form input[type=\\"submit\\"] {
	position: absolute;
	width: $x2;
	height: $x2;
	font-family: $font3;
	font-size: $f5;
	line-height: 1em;
	letter-spacing: 1px;
	color: $c_bg;
	background-color: $c_primary;
	border: none;
	cursor: pointer;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}
.thesis_email_form input[type=\\"submit\\"]:hover {
	color: $c_accent_1;
}
/* content email form */
.content .thesis_email_form {
	color: $c_bg;
	background-color: $c_secondary_dark;
	margin: $x1 0;
	border-bottom: 5px solid $mask3;
	padding: $x1;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.content .email_form_title, .content .email_form_intro {
	margin-bottom: $x05;
}
.content .email_testimonial {
	margin: $x05 0;
}
.content .thesis_email_form input[type=\\"text\\"] {
	width: 47%;
}
.content .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
	margin-left: $x025;
}
.content .thesis_email_form input[type=\\"submit\\"] {
	right: -$x05;
	bottom: $f5;
}
/* sidebar email form */
.sidebar .thesis_email_form {
	color: $c_bg;
	background-color: $c_secondary_dark;
	border-bottom: 5px solid $mask3;
	padding: $sx1;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.sidebar .thesis_email_form input[type=\\"text\\"] {
	display: block;
	margin-bottom: 0;
}
.sidebar .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
	margin-top: $sx05;
}
.sidebar .thesis_email_form input[type=\\"submit\\"] {
	right: -$sx1;
	bottom: $sx025;
}
.sidebar .thesis_email_form .email_testimonial {
	text-align: center;
	margin: $sx05 0;
}
/*** PROMO BAR ***/
#promo_bar {
	color: $c_bg;
	background-color: $c_secondary_light;
	border-bottom: 5px solid $mask2;
	padding: $x025 0;
}
#promo_bar a {
	color: $c_bg;
	text-decoration: underline;
}
#promo_bar a:hover {
	text-decoration: none;
}
#promo_bar .promo, #promo_bar .thesis_email_form {
	width: $w_total;
	text-align: center;
	margin: 0 auto;
}
#promo_bar .email_form_title, #promo_bar input[type=\\"text\\"] {
	font-size: $f6;
	line-height: $h6;
}
#promo_bar .thesis_email_form > p {
	display: inline-block;
}
#promo_bar .email_form_intro, #promo_bar input[type=\\"text\\"] {
	margin-left: $x025;
}
#promo_bar input[type=\\"text\\"] {
	width: 23%;
	line-height: 1em;
}
#promo_bar input[type=\\"submit\\"] {
	bottom: -$x1;
	right: auto;
}
/*** FOOTER ***/
#footer {
	font-size: $f6;
	line-height: $h6;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: $c_bg;
	background-color: $c_primary;
	border-top: 5px solid $mask3;
	padding: $x05 0;
}
#footer a {
	color: $c_bg;
}
#footer a:hover {
	color: $c_accent_1;
}
/*** FEATURE: SOCIAL MEDIA PROFILES ***/
.profile-icon {
	display: inline-block;
	font-size: $f4;
	line-height: 1em;
	color: $c_bg;
	text-decoration: none;
}
/*** PROFILES HEADER ***/
#header .profile-icons {
	display: inline-block;
	margin-left: $x05;
	border-left: 1px solid $c_bg;
	padding-left: $x025;
}
#header .profile-icon {
	margin-left: $x05;
	vertical-align: middle;
}
/*** PROFILES SIDEBAR ***/
.sidebar .profile-icons {
	text-align: center;
	margin-bottom: $sx15;
}
.sidebar .profile-icon {
	font-size: $f2;
	line-height: 1em;
	color: $c_accent_1;
	margin-right: $sx05;
}
.sidebar .profile-icon:last-child {
	margin-right: 0;
}
.sidebar .profile-icon:hover {
	color: $c_secondary_dark;
}
/*** PROFILES FOOTER ***/
#footer .profile-icons {
	float: right;
	display: inline-block;
}
#footer .profile-icon {
	margin-left: $x05;
}
* p:last-child, .sidebar :last-child {
	margin-bottom: 0;
}
/*** MEDIA QUERIES ***/
$w1 = $w_total - 1;
$w2 = $w_content - 1;
@media all and (max-width: $w1) {
	/* structure */
	.inner, .landing .inner, #promo_bar .promo, #promo_bar .thesis_email_form {
		width: auto;
		max-width: $w_content;
	}
	.full_width {
		min-width: $w_content;
	}
	.content, .sidebar {
		float: none;
		width: auto;
	}
	/* header */
	#header {
		text-align: center;
	}
	#site_title {
		float: none;
	}
	#thesis_header_image {
		float: none !important;
	}
	#site_tagline {
		margin-left: 0;
		border-left: 0;
		padding-left: 0;
	}
	.navigation {
		position: static;
		margin-top: $x05;
	}
	#header .profile-icons {
		display: block;
		margin-top: $x05;
		margin-left: 0;
		border-left: 0;
		padding-left: 0;
	}
	#header .profile-icon:first-child {
		margin-left: 0;
	}
	/* menu */
	.menu_control {
		display: inline-block;
		color: $c_bg;
		background-color: $c_secondary_dark;
		margin: 0 auto;
		padding: $x025 $x05;
		cursor: pointer;
		border-radius: 3px;
	}
	.menu-main {
		display: none;
		background-color: $c_bg;
		margin-top: $x05;
		margin-right: 0;
		-webkit-border-radius: 3px 3px 0 0;
		-moz-border-radius: 3px 3px 0 0;
		border-radius: 3px 3px 0 0;
	}
	.menu-main a {
		display: block;
		font-weight: 500;
		text-align: left;
		color: $c_primary_text;
		padding: $x05;
	}
	#header .menu-main a:hover {
		color: $c_bg;
		background-color: $c_secondary_light;
	}
	.menu-main > li:first-child > a:hover {
		-webkit-border-radius: 3px 3px 0 0;
		-moz-border-radius: 3px 3px 0 0;
		border-radius: 3px 3px 0 0;
	}
	.show_menu, .menu-main li {
		display: block;
	}
	.menu-main .sub-menu {
		position: static;
		display: block;
		margin-left: $x1;
		border: none;
		padding-top: 0;
		padding-bottom: 0;
	}
	.menu-main .sub-menu, .menu-main .sub-menu li {
		width: auto;
	}
	.menu > li > .sub-menu {
		margin-top: 0;
	}
	.menu-main .sub-menu:before {
		display: none;
	}
	#promo_bar .thesis_email_form > p, #promo_bar input[type=\\"text\\"] {
		display: block;
		margin: 0 auto;
	}
	/* promo bar */
	#promo_bar input[type=\\"text\\"], #promo_bar .thesis_email_form > p + p {
		margin-top: $x025;
	}
	#promo_bar input[type=\\"text\\"] {
		width: 50%;
	}
	#promo_bar input[type=\\"submit\\"] {
		bottom: -$x05;
		right: 20%;
	}
	/* content */
	.prev-next {
		margin-bottom: 0;
	}
	/* sidebar */
	.sidebar {
		margin-top: $sx15;
	}
	.sidebar input[type=\\"text\\"] {
		display: block;
		width: 50%;
	}
	.sidebar .thesis_email_form input[type=\\"text\\"] {
		display: inline-block;
		width: 47%;
	}
	.sidebar .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
		margin-top: 0;
		margin-left: $sx05;
	}
	.sidebar .thesis_email_form .email_testimonial {
		text-align: left;
	}
	/* footer */
	#footer {
		text-align: center;
	}
	#footer .profile-icons {
		float: none;
		margin-bottom: $x05;
	}
	#footer .profile-icon:first-child {
		margin-left: 0;
	}
}
@media all and (max-width: $w2) {
	.full_width {
		min-width: 0;
	}
	.inner, #promo_bar .promo, #promo_bar .thesis_email_form {
		padding-right: $x1;
		padding-left: $x1;
	}
	.byline .avatar {
		display: none;
	}
	#commentform .input_text {
		width: 50%;
	}
}
@media all and (max-width: 450px) {
	.right, .alignright, img[align=\\"right\\"], .left, .alignleft, img[align=\\"left\\"] {
		float: none;
	}
	.grt .right, .grt .left, .grt .alignright, .grt .alignleft, .grt blockquote.right, .grt blockquote.left {
		margin-right: 0;
		margin-left: 0;
	}
	.grt blockquote.right, .grt blockquote.left {
		width: auto;
		margin-bottom: $x1;
	}
	#header {
		padding: $x05 0;
	}
	#promo_bar .thesis_email_form .email_form_intro {
		margin-bottom: $x05;
	}
	#promo_bar input[type=\\"text\\"], #commentform .input_text, .sidebar input[type=\\"text\\"], .content .thesis_email_form input[type=\\"text\\"], .sidebar .thesis_email_form input[type=\\"text\\"] {
		width: 100%;
	}
	#promo_bar input[type=\\"text\\"] + input[type=\\"text\\"], .content .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
		margin-top: $x025;
	}
	#promo_bar input[type=\\"submit\\"] {
		right: 0;
	}
	.byline .num_comments_link {
		float: none;
	}
	.num_comments_link:before {
		content: \\\'\\\\a\\\\f086\\\\0020\\\';
		white-space: pre;
	}
	.twitter_profile:before {
		content: \\\'\\\\a\\\\f099\\\\0020\\\';
		white-space: pre;
	}
	.content .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"], .sidebar .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
		margin-left: 0;
	}
	.sidebar .thesis_email_form input[type=\\"text\\"] + input[type=\\"text\\"] {
		margin-top: $sx05;
	}
}',
  'boxes' => 
  array (
    'thesis_html_container' => 
    array (
      'thesis_html_container_1375814021' => 
      array (
        'class' => 'content',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_id' => 'content',
        '_name' => 'Main Content',
      ),
      'thesis_html_container_1375814080' => 
      array (
        'class' => 'inner',
        '_id' => 'footer',
        '_name' => 'Inner (Footer)',
      ),
      'thesis_html_container_1376077216' => 
      array (
        'class' => 'inner',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_id' => 'content_box',
        '_name' => 'Inner (Content Box)',
      ),
      'thesis_html_container_1376077392' => 
      array (
        'id' => 'header',
        'class' => 'full_width',
        '_id' => 'header_wrap',
        '_name' => 'Header',
      ),
      'thesis_html_container_1376081787' => 
      array (
        'class' => 'sidebar',
        '_id' => 'sidebar',
        '_name' => 'Sidebar',
      ),
      'thesis_html_container_1376163252' => 
      array (
        'id' => 'footer',
        'class' => 'full_width',
        '_id' => 'footer_wrap',
        '_name' => 'Footer',
      ),
      'thesis_html_container_1377546622' => 
      array (
        'class' => 'inner',
        '_id' => 'header',
        '_name' => 'Inner (Header)',
      ),
      'thesis_html_container_1377564058' => 
      array (
        'id' => 'content_box',
        'class' => 'full_width',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_id' => 'content_box_wrap',
        '_name' => 'Content Box',
      ),
      'thesis_html_container_1377626494' => 
      array (
        'html' => 'header',
        'class' => 'headline-container',
        '_name' => 'Headline Container',
      ),
      'thesis_html_container_1377633939' => 
      array (
        'class' => 'navigation',
        '_name' => 'Navigation Container',
      ),
      'thesis_html_container_1377635895' => 
      array (
        'class' => 'byline',
        '_id' => 'byline_post',
        '_name' => 'Byline (Post)',
      ),
      'thesis_html_container_1378087095' => 
      array (
        'id' => 'promo_bar',
        'class' => 'full_width',
        '_id' => 'promo_bar',
        '_name' => 'Promo Bar',
      ),
      'thesis_html_container_1378162299' => 
      array (
        'class' => 'comment-byline',
        '_name' => 'Comment Byline',
      ),
      'thesis_html_container_1378238104' => 
      array (
        'class' => 'prev-next',
        '_id' => 'prev_next',
        '_name' => 'Prev Next (Posts)',
      ),
      'thesis_html_container_1378264304' => 
      array (
        'class' => 'comment-container',
        '_name' => 'Comment Container',
      ),
      'thesis_html_container_1378344056' => 
      array (
        'class' => 'prev-next clear',
        '_id' => 'prev_next',
        '_name' => 'Prev Next (Archive Links)',
      ),
      'thesis_html_container_1378404892' => 
      array (
        'class' => 'archive-list',
        '_name' => 'Archive List',
      ),
      'thesis_html_container_1378600239' => 
      array (
        'class' => 'archive_intro grt post_box',
        '_name' => 'Archive Intro',
      ),
      'thesis_html_container_1379352631' => 
      array (
        'html' => 'section',
        'id' => 'comments',
        '_id' => 'comments_post',
        '_name' => 'Comments Section (Post)',
      ),
      'thesis_html_container_1379700110' => 
      array (
        'class' => 'byline',
        '_id' => 'byline_page',
        '_name' => 'Byline (Page)',
      ),
      'thesis_html_container_1379723205' => 
      array (
        'html' => 'section',
        'id' => 'comments',
        '_id' => 'comments_page',
        '_name' => 'Comments Section (Page)',
      ),
    ),
    'thesis_post_box' => 
    array (
      'thesis_post_box_1375814172' => 
      array (
        'html' => 'article',
        'class' => 'grt',
        'schema' => 'article',
        '_id' => 'post_box_home',
        '_name' => 'Post Box (Home)',
      ),
      'thesis_post_box_1378225441' => 
      array (
        'html' => 'article',
        'class' => 'grt',
        'schema' => 'article',
        '_id' => 'post_box_single',
        '_name' => 'Post Box (Single)',
      ),
      'thesis_post_box_1379699839' => 
      array (
        'html' => 'article',
        'class' => 'grt',
        'schema' => 'article',
        '_id' => 'post_box_page',
        '_name' => 'Post Box (Page)',
      ),
      'thesis_post_box_1379718062' => 
      array (
        'html' => 'article',
        'class' => 'grt',
        'schema' => 'article',
        '_id' => 'post_box_landing',
        '_name' => 'Post Box (Landing Page)',
      ),
    ),
    'thesis_wp_nav_menu' => 
    array (
      'thesis_wp_nav_menu_1376073696' => 
      array (
        'menu_class' => 'menu menu-main',
        'control' => 
        array (
          'yes' => true,
        ),
        '_name' => 'Nav Menu',
      ),
    ),
    'thesis_post_headline' => 
    array (
      'thesis_post_box_1375814172_thesis_post_headline' => 
      array (
        'link' => 
        array (
          'on' => true,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_list_1378601139_thesis_post_headline' => 
      array (
        'html' => 'span',
        'link' => 
        array (
          'on' => true,
        ),
        '_parent' => 'thesis_post_list_1378601139',
      ),
      'thesis_post_box_1378225441_thesis_post_headline' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_post_headline' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1379718062_thesis_post_headline' => 
      array (
        '_id' => 'landing',
        '_parent' => 'thesis_post_box_1379718062',
      ),
    ),
    'thesis_wp_widgets' => 
    array (
      'thesis_wp_widgets_1381323846' => 
      array (
        '_id' => 'post',
        '_name' => 'Widgets: After Post',
      ),
      'thesis_wp_widgets_1381324637' => 
      array (
        '_id' => 'page',
        '_name' => 'Widgets: After Page',
      ),
      'thesis_wp_widgets_1381326356' => 
      array (
        '_id' => 'sidebar',
        '_name' => 'Widgets: Sidebar',
      ),
    ),
    'thesis_post_num_comments' => 
    array (
      'thesis_post_box_1375814172_thesis_post_num_comments' => 
      array (
        'display' => 
        array (
          'closed' => false,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_num_comments' => 
      array (
        'display' => 
        array (
          'closed' => false,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_post_num_comments' => 
      array (
        'display' => 
        array (
          'closed' => false,
        ),
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_list_1378601139_thesis_post_num_comments' => 
      array (
        'display' => 
        array (
          'closed' => false,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_list_1378601139',
      ),
    ),
    'thesis_post_author' => 
    array (
      'thesis_post_box_1375814172_thesis_post_author' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_author' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_post_author' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
    ),
    'thesis_comments' => 
    array (
      'thesis_comments_1376751800' => 
      array (
        '_name' => 'Comments',
      ),
    ),
    'thesis_comment_form' => 
    array (
      'thesis_comment_form_1376751872' => 
      array (
        '_name' => 'Comment Form',
      ),
    ),
    'thesis_post_author_avatar' => 
    array (
      'thesis_post_box_1378225441_thesis_post_author_avatar' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1375814172_thesis_post_author_avatar' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1379699839_thesis_post_author_avatar' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
    ),
    'thesis_post_date' => 
    array (
      'thesis_post_box_1375814172_thesis_post_date' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_date' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_post_date' => 
      array (
        'schema' => 
        array (
          'only' => true,
        ),
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1379718062_thesis_post_date' => 
      array (
        'schema' => 
        array (
          'only' => true,
        ),
        '_id' => 'landing',
        '_parent' => 'thesis_post_box_1379718062',
      ),
    ),
    'ncd_profiles' => 
    array (
      'ncd_profiles_1378090841' => 
      array (
        '_id' => 'header',
        '_name' => 'Social Media Profile Links: Header',
      ),
      'ncd_profiles_1378090886' => 
      array (
        '_id' => 'sidebar',
        '_name' => 'Social Media Profile Links: Sidebar',
      ),
      'ncd_profiles_1378091069' => 
      array (
        '_id' => 'footer',
        '_name' => 'Social Media Profile Links: Footer',
      ),
    ),
    'thesis_previous_post_link' => 
    array (
      'thesis_previous_post_link' => 
      array (
        'html' => 'p',
        'intro' => 'Previous Post:',
      ),
    ),
    'thesis_next_post_link' => 
    array (
      'thesis_next_post_link' => 
      array (
        'html' => 'p',
        'intro' => 'Next Post:',
      ),
    ),
    'thesis_comment_form_cancel' => 
    array (
      'thesis_comment_form_1376751872_thesis_comment_form_cancel' => 
      array (
        'text' => 'Cancel',
        '_parent' => 'thesis_comment_form_1376751872',
      ),
    ),
    'thesis_comment_form_name' => 
    array (
      'thesis_comment_form_1376751872_thesis_comment_form_name' => 
      array (
        'label' => 
        array (
          'show' => false,
        ),
        'placeholder' => 'Name',
        '_parent' => 'thesis_comment_form_1376751872',
      ),
    ),
    'thesis_comment_form_email' => 
    array (
      'thesis_comment_form_1376751872_thesis_comment_form_email' => 
      array (
        'label' => 
        array (
          'show' => false,
        ),
        'placeholder' => 'Email',
        '_parent' => 'thesis_comment_form_1376751872',
      ),
    ),
    'thesis_comment_form_url' => 
    array (
      'thesis_comment_form_1376751872_thesis_comment_form_url' => 
      array (
        'label' => 
        array (
          'show' => false,
        ),
        'placeholder' => 'Website',
        '_parent' => 'thesis_comment_form_1376751872',
      ),
    ),
    'thesis_comment_form_comment' => 
    array (
      'thesis_comment_form_1376751872_thesis_comment_form_comment' => 
      array (
        'label' => 
        array (
          'show' => false,
        ),
        '_parent' => 'thesis_comment_form_1376751872',
      ),
    ),
    'thesis_post_categories' => 
    array (
      'thesis_post_box_1375814172_thesis_post_categories' => 
      array (
        'separator' => ',',
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_categories' => 
      array (
        'separator' => ',',
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
    ),
    'thesis_post_tags' => 
    array (
      'thesis_post_box_1375814172_thesis_post_tags' => 
      array (
        'separator' => ',',
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_tags' => 
      array (
        'separator' => ',',
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
    ),
    'thesis_twitter_profile' => 
    array (
      'thesis_post_box_1375814172_thesis_twitter_profile' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_twitter_profile' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_twitter_profile' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
    ),
    'thesis_post_list' => 
    array (
      'thesis_post_list_1378601139' => 
      array (
        'schema' => 'article',
        '_name' => 'Post List',
      ),
    ),
    'thesis_post_thumbnail' => 
    array (
      'thesis_post_box_1375814172_thesis_post_thumbnail' => 
      array (
        'alignment' => 'left',
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_post_thumbnail' => 
      array (
        'link' => 
        array (
          'link' => false,
        ),
        '_parent' => 'thesis_post_box_1378225441',
      ),
    ),
    'thesis_wp_featured_image' => 
    array (
      'thesis_post_box_1375814172_thesis_wp_featured_image' => 
      array (
        '_id' => 'home',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1378225441_thesis_wp_featured_image' => 
      array (
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1379699839_thesis_wp_featured_image' => 
      array (
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1379718062_thesis_wp_featured_image' => 
      array (
        'alignment' => 'center',
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'landing',
        '_parent' => 'thesis_post_box_1379718062',
      ),
    ),
    'thesis_comment_permalink' => 
    array (
      'thesis_comments_1376751800_thesis_comment_permalink' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_comments_nav' => 
    array (
      'thesis_comments_nav_1379445920' => 
      array (
        'class' => 'comment_nav_top',
        '_name' => 'Comment Nav: Top',
      ),
      'thesis_comments_nav_1379445931' => 
      array (
        'class' => 'comment_nav_bottom',
        '_name' => 'Comment Nav: Bottom',
      ),
    ),
    'thesis_comment_avatar' => 
    array (
      'thesis_comments_1376751800_thesis_comment_avatar' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_comment_date' => 
    array (
      'thesis_comments_1376751800_thesis_comment_date' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_post_image' => 
    array (
      'thesis_post_box_1378225441_thesis_post_image' => 
      array (
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1375814172_thesis_post_image' => 
      array (
        '_id' => 'home',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1379699839_thesis_post_image' => 
      array (
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1379718062_thesis_post_image' => 
      array (
        'alignment' => 'center',
        'link' => 
        array (
          'link' => false,
        ),
        '_id' => 'landing',
        '_parent' => 'thesis_post_box_1379718062',
      ),
    ),
    'thesis_post_content' => 
    array (
      'thesis_post_box_1378225441_thesis_post_content' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
      'thesis_post_box_1375814172_thesis_post_content' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1375814172',
      ),
      'thesis_post_box_1379699839_thesis_post_content' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1379718062_thesis_post_content' => 
      array (
        '_id' => 'landing',
        '_parent' => 'thesis_post_box_1379718062',
      ),
    ),
    'thesis_comment_author' => 
    array (
      'thesis_comments_1376751800_thesis_comment_author' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_comment_number' => 
    array (
      'thesis_comments_1376751800_thesis_comment_number' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_comment_text' => 
    array (
      'thesis_comments_1376751800_thesis_comment_text' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_comment_reply' => 
    array (
      'thesis_comments_1376751800_thesis_comment_reply' => 
      array (
        '_id' => 'comments',
        '_parent' => 'thesis_comments_1376751800',
      ),
    ),
    'thesis_post_author_description' => 
    array (
      'thesis_post_box_1379699839_thesis_post_author_description' => 
      array (
        '_id' => 'page',
        '_parent' => 'thesis_post_box_1379699839',
      ),
      'thesis_post_box_1378225441_thesis_post_author_description' => 
      array (
        '_id' => 'post',
        '_parent' => 'thesis_post_box_1378225441',
      ),
    ),
    'thesis_text_box' => 
    array (
      'thesis_text_box_1380829095' => 
      array (
        'text' => 'This is your promo text. Link to something new and exciting, like a <a href=\\"http://diythemes.com/\\">revolutionary WordPress theme</a>!',
        'class' => 'promo',
        '_id' => 'promo',
        '_name' => 'Promo Text',
      ),
    ),
    'ncd_uber_tabs' => 
    array (
      'ncd_uber_tabs' => 
      array (
        'title' => 'From the Blog',
      ),
    ),
  ),
  'vars' => 
  array (
    'var_1376073618' => 
    array (
      'name' => 'Spacing: Single',
      'ref' => 'x1',
      'css' => '26px',
    ),
    'var_1376074847' => 
    array (
      'name' => 'Spacing: Half',
      'ref' => 'x05',
      'css' => '13px',
    ),
    'var_1376082711' => 
    array (
      'name' => 'Spacing: Quarter',
      'ref' => 'x025',
      'css' => '7px',
    ),
    'var_1377880311' => 
    array (
      'name' => 'Color: Primary',
      'ref' => 'c_primary',
      'css' => '#2F3840',
    ),
    'var_1377880614' => 
    array (
      'name' => 'Color: Secondary Dark',
      'ref' => 'c_secondary_dark',
      'css' => '#51606F',
    ),
    'var_1377880668' => 
    array (
      'name' => 'Color: Secondary Light',
      'ref' => 'c_secondary_light',
      'css' => '#93A3B5',
    ),
    'var_1378055361' => 
    array (
      'name' => 'Color Mask: 20% Black',
      'ref' => 'mask3',
      'css' => 'rgba(0,0,0,.2)',
    ),
    'var_1378056214' => 
    array (
      'name' => 'Color: Borders, Widget Background',
      'ref' => 'c_accent_2',
      'css' => '#EFF1F3',
    ),
    'var_1378056305' => 
    array (
      'name' => 'Color Mask: 5% Black',
      'ref' => 'mask1',
      'css' => 'rgba(0,0,0,.05)',
    ),
    'var_1378516672' => 
    array (
      'name' => 'Color: Main Text',
      'ref' => 'c_primary_text',
      'css' => '#111111',
    ),
    'var_1378521007' => 
    array (
      'name' => 'Color: Secondary Text',
      'ref' => 'c_secondary_text',
      'css' => '#929292',
    ),
    'var_1378522614' => 
    array (
      'name' => 'Color: Links',
      'ref' => 'c_links',
      'css' => '#7994B0',
    ),
    'var_1378928810' => 
    array (
      'name' => 'Font: Primary',
      'ref' => 'font1',
      'css' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
    ),
    'var_1378933517' => 
    array (
      'name' => 'Font Size 5',
      'ref' => 'f5',
      'css' => '16px',
    ),
    'var_1378933530' => 
    array (
      'name' => 'Font Size 6',
      'ref' => 'f6',
      'css' => '13px',
    ),
    'var_1378933544' => 
    array (
      'name' => 'Font Size 4',
      'ref' => 'f4',
      'css' => '20px',
    ),
    'var_1378933551' => 
    array (
      'name' => 'Font Size 3',
      'ref' => 'f3',
      'css' => '26px',
    ),
    'var_1378933560' => 
    array (
      'name' => 'Font Size 1',
      'ref' => 'f1',
      'css' => '42px',
    ),
    'var_1378933639' => 
    array (
      'name' => 'Line Height 3',
      'ref' => 'h3',
      'css' => '39px',
    ),
    'var_1378933655' => 
    array (
      'name' => 'Line Height 4',
      'ref' => 'h4',
      'css' => '31px',
    ),
    'var_1378933666' => 
    array (
      'name' => 'Line Height 5',
      'ref' => 'h5',
      'css' => '26px',
    ),
    'var_1378933673' => 
    array (
      'name' => 'Line Height 6',
      'ref' => 'h6',
      'css' => '23px',
    ),
    'var_1378940162' => 
    array (
      'name' => 'Spacing: 1.5',
      'ref' => 'x15',
      'css' => '39px',
    ),
    'var_1378940184' => 
    array (
      'name' => 'Spacing: Double',
      'ref' => 'x2',
      'css' => '52px',
    ),
    'var_1378948005' => 
    array (
      'name' => 'Width: Content',
      'ref' => 'w_content',
      'css' => '600px',
    ),
    'var_1378948014' => 
    array (
      'name' => 'Width: Sidebar',
      'ref' => 'w_sidebar',
      'css' => '300px',
    ),
    'var_1378948076' => 
    array (
      'name' => 'Column 1 Position',
      'ref' => 'col1',
      'css' => 'left',
    ),
    'var_1378948085' => 
    array (
      'name' => 'Column 2 Position',
      'ref' => 'col2',
      'css' => 'right',
    ),
    'var_1378994662' => 
    array (
      'name' => 'Menu',
      'ref' => 'menu',
      'css' => 'font-size: 13px;
	line-height: 19px;',
    ),
    'var_1378995049' => 
    array (
      'name' => 'Pre-formatted Code Line Height',
      'ref' => 'pre',
      'css' => '26px',
    ),
    'var_1378995057' => 
    array (
      'name' => 'Sidebar',
      'ref' => 'sidebar',
      'css' => 'font-size: 13px;
	line-height: 19px;',
    ),
    'var_1378995067' => 
    array (
      'name' => 'Sidebar Heading',
      'ref' => 'sidebar_heading',
      'css' => 'font-family: "Roboto Slab", Georgia, serif;
	font-size: 17px;
	line-height: 25px;',
    ),
    'var_1378995271' => 
    array (
      'name' => 'Submenu',
      'ref' => 'w_submenu',
      'css' => '182px',
    ),
    'var_1378997160' => 
    array (
      'name' => 'Width: Total',
      'ref' => 'w_total',
      'css' => '952px',
    ),
    'var_1379028624' => 
    array (
      'name' => 'Font Size 2',
      'ref' => 'f2',
      'css' => '33px',
    ),
    'var_1379084130' => 
    array (
      'name' => 'Pullquote Line Height',
      'ref' => 'pullquote',
      'css' => '37px',
    ),
    'var_1379350464' => 
    array (
      'name' => 'Sidebar Spacing: Single',
      'ref' => 'sx1',
      'css' => '19px',
    ),
    'var_1379350473' => 
    array (
      'name' => 'Sidebar Spacing: Double',
      'ref' => 'sx2',
      'css' => '38px',
    ),
    'var_1379350480' => 
    array (
      'name' => 'Sidebar Spacing: Half',
      'ref' => 'sx05',
      'css' => '10px',
    ),
    'var_1379350488' => 
    array (
      'name' => 'Sidebar Spacing: 1.5',
      'ref' => 'sx15',
      'css' => '29px',
    ),
    'var_1380565226' => 
    array (
      'name' => 'Sidebar Spacing: Quarter',
      'ref' => 'sx025',
      'css' => '5px',
    ),
    'var_1380729415' => 
    array (
      'name' => 'Color: Border Accents',
      'ref' => 'c_accent_1',
      'css' => '#D1DBE6',
    ),
    'var_1380737275' => 
    array (
      'name' => 'Color: Content Background',
      'ref' => 'c_bg',
      'css' => '#FFFFFF',
    ),
    'var_1381167137' => 
    array (
      'name' => 'Font: Secondary',
      'ref' => 'font2',
      'css' => '"Roboto Slab", Georgia, serif',
    ),
    'var_1381167145' => 
    array (
      'name' => 'Font: Tertiary',
      'ref' => 'font3',
      'css' => '"Pacifico", Georgia, serif',
    ),
    'var_1381246939' => 
    array (
      'name' => 'Line Height 2',
      'ref' => 'h2',
      'css' => '48px',
    ),
    'var_1381247981' => 
    array (
      'name' => 'Author Bio Avatar',
      'ref' => 'bio_avatar',
      'css' => 'width: 78px;
	height: 78px;',
    ),
    'var_1381272485' => 
    array (
      'name' => 'Avatar Position',
      'ref' => 'avatar',
      'css' => 'left: -52px;',
    ),
    'var_1381274398' => 
    array (
      'name' => 'Color Mask: 7% Black',
      'ref' => 'mask2',
      'css' => 'rgba(0,0,0,.07)',
    ),
  ),
  'templates' => 
  array (
    'home' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
          1 => 'thesis_html_container_1376081787',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
          1 => 'thesis_html_container_1378344056',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1375814172',
        ),
        'thesis_post_box_1375814172' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1375814172_thesis_wp_featured_image',
          2 => 'thesis_post_box_1375814172_thesis_post_thumbnail',
          3 => 'thesis_post_box_1375814172_thesis_post_content',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1375814172_thesis_post_headline',
          1 => 'thesis_html_container_1377635895',
        ),
        'thesis_html_container_1377635895' => 
        array (
          0 => 'thesis_post_box_1375814172_thesis_post_author',
          1 => 'thesis_post_box_1375814172_thesis_post_date',
          2 => 'thesis_post_box_1375814172_thesis_twitter_profile',
          3 => 'thesis_post_box_1375814172_thesis_post_edit',
          4 => 'thesis_post_box_1375814172_thesis_post_num_comments',
          5 => 'thesis_post_box_1375814172_thesis_post_categories',
          6 => 'thesis_post_box_1375814172_thesis_post_tags',
          7 => 'thesis_post_box_1375814172_thesis_post_author_avatar',
        ),
        'thesis_html_container_1378344056' => 
        array (
          0 => 'thesis_previous_posts_link',
          1 => 'thesis_next_posts_link',
        ),
        'thesis_html_container_1376081787' => 
        array (
          0 => 'thesis_wp_widgets_1381326356',
          1 => 'ncd_uber_tabs',
          2 => 'ncd_profiles_1378090886',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'single' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
          1 => 'thesis_html_container_1376081787',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
          1 => 'thesis_html_container_1378238104',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1378225441',
        ),
        'thesis_post_box_1378225441' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1378225441_thesis_wp_featured_image',
          2 => 'thesis_post_box_1378225441_thesis_post_image',
          3 => 'thesis_post_box_1378225441_thesis_post_content',
          4 => 'thesis_post_box_1378225441_thesis_post_author_description',
          5 => 'thesis_wp_widgets_1381323846',
          6 => 'thesis_html_container_1379352631',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1378225441_thesis_post_headline',
          1 => 'thesis_html_container_1377635895',
        ),
        'thesis_html_container_1377635895' => 
        array (
          0 => 'thesis_post_box_1378225441_thesis_post_author',
          1 => 'thesis_post_box_1378225441_thesis_post_date',
          2 => 'thesis_post_box_1378225441_thesis_twitter_profile',
          3 => 'thesis_post_box_1378225441_thesis_post_edit',
          4 => 'thesis_post_box_1378225441_thesis_post_num_comments',
          5 => 'thesis_post_box_1378225441_thesis_post_categories',
          6 => 'thesis_post_box_1378225441_thesis_post_tags',
          7 => 'thesis_post_box_1378225441_thesis_post_author_avatar',
        ),
        'thesis_html_container_1379352631' => 
        array (
          0 => 'thesis_comments_intro',
          1 => 'thesis_comments_nav_1379445920',
          2 => 'thesis_comments_1376751800',
          3 => 'thesis_comments_nav_1379445931',
          4 => 'thesis_comment_form_1376751872',
        ),
        'thesis_comments_1376751800' => 
        array (
          0 => 'thesis_html_container_1378264304',
        ),
        'thesis_html_container_1378264304' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_avatar',
          1 => 'thesis_html_container_1378162299',
          2 => 'thesis_comments_1376751800_thesis_comment_text',
          3 => 'thesis_comments_1376751800_thesis_comment_reply',
        ),
        'thesis_html_container_1378162299' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_author',
          1 => 'thesis_comments_1376751800_thesis_comment_permalink',
          2 => 'thesis_comments_1376751800_thesis_comment_edit',
          3 => 'thesis_comments_1376751800_thesis_comment_date',
        ),
        'thesis_comment_form_1376751872' => 
        array (
          0 => 'thesis_comment_form_1376751872_thesis_comment_form_title',
          1 => 'thesis_comment_form_1376751872_thesis_comment_form_name',
          2 => 'thesis_comment_form_1376751872_thesis_comment_form_email',
          3 => 'thesis_comment_form_1376751872_thesis_comment_form_url',
          4 => 'thesis_comment_form_1376751872_thesis_comment_form_comment',
          5 => 'thesis_comment_form_1376751872_thesis_comment_form_submit',
          6 => 'thesis_comment_form_1376751872_thesis_comment_form_cancel',
        ),
        'thesis_html_container_1378238104' => 
        array (
          0 => 'thesis_previous_post_link',
          1 => 'thesis_next_post_link',
        ),
        'thesis_html_container_1376081787' => 
        array (
          0 => 'thesis_wp_widgets_1381326356',
          1 => 'ncd_uber_tabs',
          2 => 'ncd_profiles_1378090886',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'page' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
          1 => 'thesis_html_container_1376081787',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1379699839',
        ),
        'thesis_post_box_1379699839' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1379699839_thesis_wp_featured_image',
          2 => 'thesis_post_box_1379699839_thesis_post_image',
          3 => 'thesis_post_box_1379699839_thesis_post_content',
          4 => 'thesis_post_box_1379699839_thesis_post_author_description',
          5 => 'thesis_wp_widgets_1381324637',
          6 => 'thesis_html_container_1379723205',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1379699839_thesis_post_headline',
          1 => 'thesis_html_container_1379700110',
        ),
        'thesis_html_container_1379700110' => 
        array (
          0 => 'thesis_post_box_1379699839_thesis_post_author',
          1 => 'thesis_post_box_1379699839_thesis_post_date',
          2 => 'thesis_post_box_1379699839_thesis_twitter_profile',
          3 => 'thesis_post_box_1379699839_thesis_post_edit',
          4 => 'thesis_post_box_1379699839_thesis_post_num_comments',
          5 => 'thesis_post_box_1379699839_thesis_post_author_avatar',
        ),
        'thesis_html_container_1379723205' => 
        array (
          0 => 'thesis_comments_intro',
          1 => 'thesis_comments_nav_1379445920',
          2 => 'thesis_comments_1376751800',
          3 => 'thesis_comments_nav_1379445931',
          4 => 'thesis_comment_form_1376751872',
        ),
        'thesis_comments_1376751800' => 
        array (
          0 => 'thesis_html_container_1378264304',
          1 => 'thesis_comments_1376751800_thesis_comment_text',
          2 => 'thesis_comments_1376751800_thesis_comment_reply',
        ),
        'thesis_html_container_1378264304' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_avatar',
          1 => 'thesis_html_container_1378162299',
        ),
        'thesis_html_container_1378162299' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_author',
          1 => 'thesis_comments_1376751800_thesis_comment_permalink',
          2 => 'thesis_comments_1376751800_thesis_comment_edit',
          3 => 'thesis_comments_1376751800_thesis_comment_date',
        ),
        'thesis_comment_form_1376751872' => 
        array (
          0 => 'thesis_comment_form_1376751872_thesis_comment_form_title',
          1 => 'thesis_comment_form_1376751872_thesis_comment_form_name',
          2 => 'thesis_comment_form_1376751872_thesis_comment_form_email',
          3 => 'thesis_comment_form_1376751872_thesis_comment_form_url',
          4 => 'thesis_comment_form_1376751872_thesis_comment_form_comment',
          5 => 'thesis_comment_form_1376751872_thesis_comment_form_submit',
          6 => 'thesis_comment_form_1376751872_thesis_comment_form_cancel',
        ),
        'thesis_html_container_1376081787' => 
        array (
          0 => 'thesis_wp_widgets_1381326356',
          1 => 'ncd_uber_tabs',
          2 => 'ncd_profiles_1378090886',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'archive' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
          1 => 'thesis_html_container_1376081787',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_html_container_1378600239',
          1 => 'thesis_wp_loop',
          2 => 'thesis_html_container_1378344056',
        ),
        'thesis_html_container_1378600239' => 
        array (
          0 => 'thesis_archive_title',
          1 => 'thesis_archive_content',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_list_1378601139',
        ),
        'thesis_post_list_1378601139' => 
        array (
          0 => 'thesis_post_list_1378601139_thesis_post_headline',
          1 => 'thesis_post_list_1378601139_thesis_post_num_comments',
          2 => 'thesis_post_list_1378601139_thesis_post_edit',
        ),
        'thesis_html_container_1378344056' => 
        array (
          0 => 'thesis_previous_posts_link',
          1 => 'thesis_next_posts_link',
        ),
        'thesis_html_container_1376081787' => 
        array (
          0 => 'thesis_wp_widgets_1381326356',
          1 => 'ncd_uber_tabs',
          2 => 'ncd_profiles_1378090886',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'custom_1378347806' => 
    array (
      'title' => 'No Sidebars (Post)',
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'no-sidebars cgrt',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
          1 => 'thesis_html_container_1378238104',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1378225441',
        ),
        'thesis_post_box_1378225441' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1378225441_thesis_wp_featured_image',
          2 => 'thesis_post_box_1378225441_thesis_post_image',
          3 => 'thesis_post_box_1378225441_thesis_post_content',
          4 => 'thesis_post_box_1378225441_thesis_post_author_description',
          5 => 'thesis_wp_widgets_1381323846',
          6 => 'thesis_html_container_1379352631',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1378225441_thesis_post_headline',
          1 => 'thesis_html_container_1377635895',
        ),
        'thesis_html_container_1377635895' => 
        array (
          0 => 'thesis_post_box_1378225441_thesis_post_author',
          1 => 'thesis_post_box_1378225441_thesis_post_date',
          2 => 'thesis_post_box_1378225441_thesis_twitter_profile',
          3 => 'thesis_post_box_1378225441_thesis_post_edit',
          4 => 'thesis_post_box_1378225441_thesis_post_num_comments',
          5 => 'thesis_post_box_1378225441_thesis_post_categories',
          6 => 'thesis_post_box_1378225441_thesis_post_tags',
          7 => 'thesis_post_box_1378225441_thesis_post_author_avatar',
        ),
        'thesis_html_container_1379352631' => 
        array (
          0 => 'thesis_comments_intro',
          1 => 'thesis_comments_nav_1379445920',
          2 => 'thesis_comments_1376751800',
          3 => 'thesis_comments_nav_1379445931',
          4 => 'thesis_comment_form_1376751872',
        ),
        'thesis_comments_1376751800' => 
        array (
          0 => 'thesis_html_container_1378264304',
        ),
        'thesis_html_container_1378264304' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_avatar',
          1 => 'thesis_html_container_1378162299',
          2 => 'thesis_comments_1376751800_thesis_comment_text',
          3 => 'thesis_comments_1376751800_thesis_comment_reply',
        ),
        'thesis_html_container_1378162299' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_author',
          1 => 'thesis_comments_1376751800_thesis_comment_permalink',
          2 => 'thesis_comments_1376751800_thesis_comment_edit',
          3 => 'thesis_comments_1376751800_thesis_comment_date',
        ),
        'thesis_comment_form_1376751872' => 
        array (
          0 => 'thesis_comment_form_1376751872_thesis_comment_form_title',
          1 => 'thesis_comment_form_1376751872_thesis_comment_form_name',
          2 => 'thesis_comment_form_1376751872_thesis_comment_form_email',
          3 => 'thesis_comment_form_1376751872_thesis_comment_form_url',
          4 => 'thesis_comment_form_1376751872_thesis_comment_form_comment',
          5 => 'thesis_comment_form_1376751872_thesis_comment_form_submit',
          6 => 'thesis_comment_form_1376751872_thesis_comment_form_cancel',
        ),
        'thesis_html_container_1378238104' => 
        array (
          0 => 'thesis_previous_post_link',
          1 => 'thesis_next_post_link',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'custom_1378400000' => 
    array (
      'title' => 'No Sidebars (Page)',
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'no-sidebars cgrt',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1378087095',
          2 => 'thesis_html_container_1377564058',
          3 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
          1 => 'thesis_site_tagline',
          2 => 'thesis_html_container_1377633939',
        ),
        'thesis_html_container_1377633939' => 
        array (
          0 => 'thesis_wp_nav_menu_1376073696',
          1 => 'ncd_profiles_1378090841',
        ),
        'thesis_html_container_1378087095' => 
        array (
          0 => 'thesis_text_box_1380829095',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1379699839',
        ),
        'thesis_post_box_1379699839' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1379699839_thesis_wp_featured_image',
          2 => 'thesis_post_box_1379699839_thesis_post_image',
          3 => 'thesis_post_box_1379699839_thesis_post_content',
          4 => 'thesis_post_box_1379699839_thesis_post_author_description',
          5 => 'thesis_wp_widgets_1381324637',
          6 => 'thesis_html_container_1379723205',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1379699839_thesis_post_headline',
          1 => 'thesis_html_container_1379700110',
        ),
        'thesis_html_container_1379700110' => 
        array (
          0 => 'thesis_post_box_1379699839_thesis_post_author',
          1 => 'thesis_post_box_1379699839_thesis_twitter_profile',
          2 => 'thesis_post_box_1379699839_thesis_post_edit',
          3 => 'thesis_post_box_1379699839_thesis_post_date',
          4 => 'thesis_post_box_1379699839_thesis_post_num_comments',
          5 => 'thesis_post_box_1379699839_thesis_post_author_avatar',
        ),
        'thesis_html_container_1379723205' => 
        array (
          0 => 'thesis_comments_intro',
          1 => 'thesis_comments_nav_1379445920',
          2 => 'thesis_comments_1376751800',
          3 => 'thesis_comments_nav_1379445931',
          4 => 'thesis_comment_form_1376751872',
        ),
        'thesis_comments_1376751800' => 
        array (
          0 => 'thesis_html_container_1378264304',
        ),
        'thesis_html_container_1378264304' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_avatar',
          1 => 'thesis_html_container_1378162299',
          2 => 'thesis_comments_1376751800_thesis_comment_text',
          3 => 'thesis_comments_1376751800_thesis_comment_reply',
        ),
        'thesis_html_container_1378162299' => 
        array (
          0 => 'thesis_comments_1376751800_thesis_comment_author',
          1 => 'thesis_comments_1376751800_thesis_comment_permalink',
          2 => 'thesis_comments_1376751800_thesis_comment_edit',
          3 => 'thesis_comments_1376751800_thesis_comment_date',
        ),
        'thesis_comment_form_1376751872' => 
        array (
          0 => 'thesis_comment_form_1376751872_thesis_comment_form_title',
          1 => 'thesis_comment_form_1376751872_thesis_comment_form_name',
          2 => 'thesis_comment_form_1376751872_thesis_comment_form_email',
          3 => 'thesis_comment_form_1376751872_thesis_comment_form_url',
          4 => 'thesis_comment_form_1376751872_thesis_comment_form_comment',
          5 => 'thesis_comment_form_1376751872_thesis_comment_form_submit',
          6 => 'thesis_comment_form_1376751872_thesis_comment_form_cancel',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'ncd_profiles_1378091069',
          1 => 'thesis_attribution',
          2 => 'thesis_wp_admin',
        ),
      ),
    ),
    'custom_1378400418' => 
    array (
      'title' => 'Landing Page',
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'landing cgrt',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1376077392',
          1 => 'thesis_html_container_1377564058',
          2 => 'thesis_html_container_1376163252',
        ),
        'thesis_html_container_1376077392' => 
        array (
          0 => 'thesis_html_container_1377546622',
        ),
        'thesis_html_container_1377546622' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1377564058' => 
        array (
          0 => 'thesis_html_container_1376077216',
        ),
        'thesis_html_container_1376077216' => 
        array (
          0 => 'thesis_html_container_1375814021',
        ),
        'thesis_html_container_1375814021' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1379718062',
        ),
        'thesis_post_box_1379718062' => 
        array (
          0 => 'thesis_html_container_1377626494',
          1 => 'thesis_post_box_1379718062_thesis_wp_featured_image',
          2 => 'thesis_post_box_1379718062_thesis_post_image',
          3 => 'thesis_post_box_1379718062_thesis_post_content',
        ),
        'thesis_html_container_1377626494' => 
        array (
          0 => 'thesis_post_box_1379718062_thesis_post_headline',
          1 => 'thesis_post_box_1379718062_thesis_post_date',
          2 => 'thesis_post_box_1379718062_thesis_post_edit',
        ),
        'thesis_html_container_1376163252' => 
        array (
          0 => 'thesis_html_container_1375814080',
        ),
        'thesis_html_container_1375814080' => 
        array (
          0 => 'thesis_attribution',
        ),
      ),
    ),
  ),
  '_design' => 
  array (
    'font' => 
    array (
      'font2' => 'roboto',
      'font3' => 'pacifico',
    ),
  ),
);
}
