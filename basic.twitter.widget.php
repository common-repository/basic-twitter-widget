<?php
/*
Plugin Name: Basic Twitter Widget
Plugin URI: http://wordpress.org/extend/plugins/basic-twitter-widget
Description: Just a simple twitter widget that displays the X latetst tweets of user Y.
Author: Koen Eijkemans
Version: 1.3
Author URI: http://www.koen-eijkemans.nl
*/
require_once 'class.twitter.parser.php';

class TwitterWidget extends WP_Widget {
	private $parser;

	function TwitterWidget() {
		$widget_ops = array( 'classname' => 'twitter_widget', 'description' => __( "Twitter Widget" ) );
		$this->WP_Widget('twitter', __('Basic Twitter Widget'), $widget_ops);
		
		$this->parser = new TwitterParser();
	}
	
	// Base of the widget
	function widget($args, $instance) {
		extract($args);
		
		echo "<li>";
		echo "<h2 class=\"widget-title\">Twitter</h2>";
		$this->parser->parse($instance['user'], $instance['num_of_tweets']);
		
		echo "</li>";	
	}

	function form($instance) {
		echo '<div id="twitter/admin">';
		
		echo '<label for="' . $this->get_field_id("user") .'">Twitter username:</label>';
		echo '<input type="text" class="widefat" ';
		echo 'name="' . $this->get_field_name("user") . '" '; 
		echo 'id="' . $this->get_field_id("user") . '" ';
		echo 'value="' . $instance["user"] . '" />';
		
		echo '<label for="' . $this->get_field_id("num_of_tweets") .'">Number of tweets:</label>';
		echo '<input type="text" class="widefat" ';
		echo 'name="' . $this->get_field_name("num_of_tweets") . '" '; 
		echo 'id="' . $this->get_field_id("num_of_tweets") . '" ';
		echo 'value="' . $instance["num_of_tweets"] . '" />';
		
		echo '<p>This widget will display the X last tweets of user Y.</p>';
		
		
		
		echo '</div>';
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	
}
add_action('widgets_init', create_function('', 'return register_widget("TwitterWidget");'));

?>