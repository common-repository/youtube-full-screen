<?php
/*
Plugin Name: Youtube Full Screen
Version: 1.0
Plugin URI: http://www.vermont-web-design.com/youtube-full-screen.html
Author: Vermont Web Design
Author URI: http://www.vermont-web-design.com
Description: Open Youtube Full Screen in a New Window. Just use [youtube]paste youtube url here[/youtube] and it will create a link to open the Youtube video full screen in a new window, in the Youtube player.
*/

/*  Copyright 2010  Vermont Web Design  (email : info@vermont-web-design.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function yfs1_function ($yfs1) {
 $yfs1 = str_replace('[youtube]','<a href="', $yfs1);
 return $yfs1;
}

add_filter('the_content', 'yfs1_function');

function yfs2_function ($yfs2) {
 $yfs2 = str_replace('http://www.youtube.com/watch?v=','http://www.youtube.com/v/', $yfs2);
 return $yfs2;
}

add_filter('the_content', 'yfs2_function');

function yfs3_function ($yfs3) {
 $yfs3 = str_replace('[/youtube]','" target="_blank">Watch Now</a>', $yfs3);
 return $yfs3;
}

add_filter('the_content', 'yfs3_function');

?>