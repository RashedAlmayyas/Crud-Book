<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Rashed Crud Book</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Moleskine Notebook with jQuery Booklet" />
        <meta name="keywords" content="jquery, book, flip, pages, moleskine, booklet, plugin, css3 "/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>

		<script type="text/javascript" src="./booklet/jquery-1.4.4.min.js"></script>
		<script src="./booklet/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="./booklet/jquery.fermion.booklet.1.1.0.js" type="text/javascript"></script>

		<link href="./booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>

		<script src="./cufon/cufon-yui.js" type="text/javascript"></script>
		<script src="./cufon/ChunkFive_400.font.js" type="text/javascript"></script>
		<script src="./cufon/Note_this_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,p,.b-counter');
			Cufon.replace('.book_wrapper a', {hover:true});
			Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.footer a', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.footer p', {fontFamily:'Note_this'});
			Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily:'ChunkFive'});
		</script>

    </head>
    <body>
	<div class="text" id="dock_panel">

			<span class="text">Rashed Crud Book</span>
			<span class="text" style="font-size: 11px;" id="direct_nav"></span>
		
	</div>
	
	
		<div class="book_wrapper">
			<a id="next_page_button"></a>
			<a id="prev_page_button"></a>
			<div id="loading" class="loading">Loading pages...</div>
			
			<div id="mybook" style="display:none;">
				<div class="load">				
			<h1>Laravel Basic CRUD [Books]	</h1>
			<p style="padding-left: 6%; padding-top: 20%;">This site adds and displays books,<br> and enables us to update or delete <br>the data for books</p>
				</div>
				<div class="b-load">
					<div>
						<!--<img src="ui/1.jpg" alt=""/>//-->
						<h1>Add Book</h1>
						
						<form style="padding-left: 28%; padding-top: 12%;">
							<p>title:</p>
							<input type="text" id="fname" name="fname">
							<p>description:</p>
							<input type="text" id="lname" name="lname">
							<p>auther:</p>
							<input type="text" id="fname" name="fname">
							<p>image:</p>
							<input type="text" id="lname" name="lname"><br><br>
							<button style="border: none; padding-right: 40%;"><p>Add</p></button><br>
							<button style="border: none; padding-right: 40%;"><p>View</p></button>

						  </form>
						</p>
				</div>
					
					<div>
						<img src="ui/3.jpg" alt="" />
						
					</div>
					<div>
						<h1>>I am Rashed Al-Mayyas </h1><p style="padding-left: 17%; padding-top: 8%;">Im Web developer I would like to present to <br> you the crud book project laravel in a<br> unique way. <br>I hope you like it</p>
						<br><br>				<h1>To communicate with me</h1>	
										<br><br>	
						<p style="padding-left: 17%;">Phone Number : 0778083602</p>	
						<p style="padding-left: 17%;"> Githum : <a href="https://github.com/RashedAlmayyas">RashedAlmayyas </a></p>
		
						<p style="padding-left: 17%;"> Email : <a href="mailto:mayyasalghwari@gmail.com">mayyasalghwari@gmail.com </a></p>
		
						<p style="padding-left: 35%; padding-top: 12%;">Thank you </p>
					</div>
		
				</div></div>
        
		</div>

        <!-- The JavaScript -->

        <script type="text/javascript">
			$(function() {
				var $mybook 		= $('#mybook');
				var $bttn_next		= $('#next_page_button');
				var $bttn_prev		= $('#prev_page_button');
				var $loading		= $('#loading');
				var $mybook_images	= $mybook.find('img');
				var cnt_images		= $mybook_images.length;
				var loaded			= 0;
				//preload all the images in the book,
				//and then call the booklet plugin

				$mybook_images.each(function(){
					var $img 	= $(this);
					var source	= $img.attr('src');
					$('<img/>').load(function(){
						++loaded;
						if(loaded == cnt_images){
							$loading.hide();
							$bttn_next.show();
							$bttn_prev.show();
							$mybook.show().booklet({
								name:               null,                            // name of the booklet to display in the document title bar
								width:              800,                             // container width
								height:             500,                             // container height
								speed:              600,                             // speed of the transition between pages
								direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
								startingPage:       0,                               // index of the first page to be displayed
								easing:             'easeInOutQuad',                 // easing method for complete transition
								easeIn:             'easeInQuad',                    // easing method for first half of transition
								easeOut:            'easeOutQuad',                   // easing method for second half of transition

								closed:             true,                           // start with the book "closed", will add empty pages to beginning and end of book
								closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
								closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
								closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
								closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
								covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

								pagePadding:        10,                              // padding for each page wrapper
								pageNumbers:        true,                            // display page numbers on each page

								hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
								overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
								tabs:               false,                           // adds tabs along the top of the pages
								tabWidth:           60,                              // set the width of the tabs
								tabHeight:          20,                              // set the height of the tabs
								arrows:             false,                           // adds arrows overlayed over the book edges
								cursor:             'pointer',                       // cursor css setting for side bar areas

								hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
								keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
								next:               $bttn_next,          			// selector for element to use as click trigger for next page
								prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

								menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
								pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
								chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

								shadows:            true,                            // display shadows on page animations
								shadowTopFwdWidth:  166,                             // shadow width for top forward anim
								shadowTopBackWidth: 166,                             // shadow width for top back anim
								shadowBtmWidth:     50,                              // shadow width for bottom shadow

								before:             function(){},                    // callback invoked before each page turn animation
								after:              function(){}                     // callback invoked after each page turn animation
							});
							Cufon.refresh();
							
						}
					}).attr('src',source);
				});
			});
        </script>
    </body>
</html><?php /**PATH C:\Users\user\laravel-simple-CRUD\resources\views/welcome.blade.php ENDPATH**/ ?>