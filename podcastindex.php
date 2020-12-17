<?PHP

/*
Plugin Name: Podcast Namespace
Plugin URI: https://github.com/Lehmancreations/Podcast-Namespace-Wordpress-Plugin
Description: A plugin to add the podcasting 2.0 namespace to your Powerpress feeds
Version: 1.0.2
Author: Lehmancreations
Author URI: https://lehmancreations.com
Requires at least: 3.6


*/


/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class PodcastNamespace {
	private $podcast_namespace_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'podcast_namespace_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'podcast_namespace_page_init' ) );
	}

	public function podcast_namespace_add_plugin_page() {
		add_options_page(
			'Podcast Namespace', // page_title
			'Podcast Namespace', // menu_title
			'manage_options', // capability
			'podcast-namespace', // menu_slug
			array( $this, 'podcast_namespace_create_admin_page' ) // function
		);
	}

	public function podcast_namespace_create_admin_page() {
		$this->podcast_namespace_options = get_option( 'podcast_namespace_option_name' ); ?>

		<div class="wrap">
			<h2>Podcast Namespace</h2>
			<p><b>Set these options for the podcast namespace at the channel level</b></p>
			
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'podcast_namespace_option_group' );
					do_settings_sections( 'podcast-namespace-admin' );
					submit_button();
				?>
			

			
			</form>
		</div>
<div>
				<p>
				<b>To use the item level namespace place the following each in a custom field on the post:</b><br><br>
			transcript is the name and value is a URL to the json encoded transcript file, you can have more than one of these but currently we only support json<br><br>
			chapters is the name and value is a URL to a json encoded chapter file<br><br>
			person is the name and value is the following each on its own line (name, host/guest, image url, other url to person)	<br><br>
			soundbite is the name and value is the following each on its own line (title, start time, duration)
				</p>
</div>

<div>
	<p>
		<hr>
		Do you like this plugin? <a href="https://dudesanddadspodcast.com/paypal"> Consider a paypal donation to the podcast I host/produce </a>
	</p>
</div>
	<?php }

	public function podcast_namespace_page_init() {
		register_setting(
			'podcast_namespace_option_group', // option_group
			'podcast_namespace_option_name', // option_name
			array( $this, 'podcast_namespace_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'podcast_namespace_setting_section', // id
			'Settings', // title
			array( $this, 'podcast_namespace_section_info' ), // callback
			'podcast-namespace-admin' // page
		);

		add_settings_field(
			'locked_0', // id
			'Locked', // title
			array( $this, 'locked_0_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);

		add_settings_field(
			'locked_owner_1', // id
			'Locked Owner Email', // title
			array( $this, 'locked_owner_1_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);

		add_settings_field(
			'feedback_contact_email_2', // id
			'Feedback Contact Email', // title
			array( $this, 'feedback_contact_email_2_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);

		add_settings_field(
			'abuse_contact_email_3', // id
			'Abuse Contact Email', // title
			array( $this, 'abuse_contact_email_3_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);

		add_settings_field(
			'advertising_contact_email_3', // id
			'Advertising Contact Email', // title
			array( $this, 'advertising_contact_email_3_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);
		
		
		
		add_settings_field(
			'funding_url_4', // id
			'Funding Url', // title
			array( $this, 'funding_url_4_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);
		
		add_settings_field(
			'funding_description_0', // id
			'Funding Description', // title
			array( $this, 'funding_description_0_callback' ), // callback
			'podcast-namespace-admin', // page
			'podcast_namespace_setting_section' // section
		);
	}

	public function podcast_namespace_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['locked_0'] ) ) {
			$sanitary_values['locked_0'] = $input['locked_0'];
		}

		if ( isset( $input['locked_owner_1'] ) ) {
			$sanitary_values['locked_owner_1'] = sanitize_text_field( $input['locked_owner_1'] );
		}

		if ( isset( $input['feedback_contact_email_2'] ) ) {
			$sanitary_values['feedback_contact_email_2'] = sanitize_text_field( $input['feedback_contact_email_2'] );
		}

		if ( isset( $input['abuse_contact_email_3'] ) ) {
			$sanitary_values['abuse_contact_email_3'] = sanitize_text_field( $input['abuse_contact_email_3'] );
		}
		
		if ( isset( $input['advertising_contact_email_3'] ) ) {
			$sanitary_values['advertising_contact_email_3'] = sanitize_text_field( $input['advertising_contact_email_3'] );
		}

		if ( isset( $input['funding_url_4'] ) ) {
			$sanitary_values['funding_url_4'] = sanitize_text_field( $input['funding_url_4'] );
		}
		
		if ( isset( $input['funding_description_0'] ) ) {
			$sanitary_values['funding_description_0'] = sanitize_text_field( $input['funding_description_0'] );

		return $sanitary_values;
		}
		
	}
	public function podcast_namespace_section_info() {
		
	}

	public function locked_0_callback() {
		?> <select name="podcast_namespace_option_name[locked_0]" id="locked_0">
			<?php $selected = (isset( $this->podcast_namespace_options['locked_0'] ) && $this->podcast_namespace_options['locked_0'] === 'yes') ? 'selected' : '' ; ?>
			<option value="yes" <?php echo $selected; ?>>Yes</option>
			<?php $selected = (isset( $this->podcast_namespace_options['locked_0'] ) && $this->podcast_namespace_options['locked_0'] === 'no') ? 'selected' : '' ; ?>
			<option value="no" <?php echo $selected; ?>>No</option>
		</select> <?php
	}

	public function locked_owner_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[locked_owner_1]" id="locked_owner_1" value="%s">',
			isset( $this->podcast_namespace_options['locked_owner_1'] ) ? esc_attr( $this->podcast_namespace_options['locked_owner_1']) : ''
		);
	}

	public function feedback_contact_email_2_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[feedback_contact_email_2]" id="feedback_contact_email_2" value="%s">',
			isset( $this->podcast_namespace_options['feedback_contact_email_2'] ) ? esc_attr( $this->podcast_namespace_options['feedback_contact_email_2']) : ''
		);
	}

	public function abuse_contact_email_3_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[abuse_contact_email_3]" id="abuse_contact_email_3" value="%s">',
			isset( $this->podcast_namespace_options['abuse_contact_email_3'] ) ? esc_attr( $this->podcast_namespace_options['abuse_contact_email_3']) : ''
		);
	}
	
	public function advertising_contact_email_3_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[advertising_contact_email_3]" id="adertising_contact_email_3" value="%s">',
			isset( $this->podcast_namespace_options['advertising_contact_email_3'] ) ? esc_attr( $this->podcast_namespace_options['advertising_contact_email_3']) : ''
		);
	}

	public function funding_url_4_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[funding_url_4]" id="funding_url_4" value="%s">',
			isset( $this->podcast_namespace_options['funding_url_4'] ) ? esc_attr( $this->podcast_namespace_options['funding_url_4']) : ''
		);
	}
		
	public function funding_description_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="podcast_namespace_option_name[funding_description_0]" id="funding_description_0" value="%s">',
			isset( $this->podcast_namespace_options['funding_description_0'] ) ? esc_attr( $this->podcast_namespace_options['funding_description_0']) : ''
		);
	}

}
if ( is_admin() )
	$podcast_namespace = new PodcastNamespace();

/* 
 * Retrieve this value with:
 * $podcast_namespace_options = get_option( 'podcast_namespace_option_name' ); // Array of All Options
 * $locked_0 = $podcast_namespace_options['locked_0']; // Locked
 * $locked_owner_1 = $podcast_namespace_options['locked_owner_1']; // Locked Owner
 * $feedback_contact_email_2 = $podcast_namespace_options['feedback_contact_email_2']; // Feedback Contact Email
 * $abuse_contact_email_3 = $podcast_namespace_options['abuse_contact_email_3']; // Abuse Contact Email
 * $advertising_contact_email_3 = $podcast_namespace_options['advertising_contact_email_3']; // Advertising Contact Email
 * $funding_url_4 = $podcast_namespace_options['funding_url_4']; // Funding Url
 * $funding_description_0 = $podcast_namespace_options['funding_description_0']; // Funding Description
 */



function podcastindex_rss2_ns()
{
	if( !powerpress_is_podcast_feed() )
		return;

	// Okay, lets add the namespace
	echo 'xmlns:podcast="https://github.com/Podcastindex-org/podcast-namespace/blob/main/docs/1.0.md"'.PHP_EOL;
	
}

add_action('rss2_ns', 'podcastindex_rss2_ns');
add_action('rss2_ns_podcastindex', 'podcastindex_rss2_ns');




function podastindex_rss2_head()
{
	if( !powerpress_is_podcast_feed() )
		return;
	
	$podcast_namespace_options = get_option( 'podcast_namespace_option_name' ); // Array of All Options
	
	
	
	
	
		echo "<!-- Podcast Index Tags Added by LehmanCreations -->".PHP_EOL;	
	
	    if (!empty ( $podcast_namespace_options['locked_owner_1'] )) {
			echo "\t".'<podcast:locked owner="' . $podcast_namespace_options['locked_owner_1'] .'">' . $podcast_namespace_options['locked_0'] . '</podcast:locked>'.PHP_EOL; }
		
		 if (!empty ( $podcast_namespace_options['feedback_contact_email_2'] )) {
			echo "\t".'<podcast:contact type="feedback" method="email">'. $podcast_namespace_options['feedback_contact_email_2'] .'</podcast:contact>'.PHP_EOL; }
	
		if (!empty ( $podcast_namespace_options['abuse_contact_email_3'] )) {
			echo "\t".'<podcast:contact type="abuse" method="email">' . $podcast_namespace_options['abuse_contact_email_3'] . '</podcast:contact>'.PHP_EOL; }
		
		if (!empty ( $podcast_namespace_options['advertising_contact_email_3'] )) {
			echo "\t".'<podcast:contact type="advertising" method="email">' . $podcast_namespace_options['advertising_contact_email_3'] . '</podcast:contact>'.PHP_EOL; }
		
		if (!empty ( $podcast_namespace_options['funding_url_4'] )) {
			echo "\t".'<podcast:funding url="'. $podcast_namespace_options['funding_url_4'] . '">' .$podcast_namespace_options['funding_description_0']. '</podcast:funding>'.PHP_EOL; }

}

add_action('rss2_head', 'podastindex_rss2_head');



// Item level

//Chapters
function podcastindex_rss2_chapters( $content ) {

	if( !powerpress_is_podcast_feed() )
		return;


    global $post;
    $post_chapters = get_post_meta( $post->ID, 'chapters', TRUE );
    // add chapters only if the Custom Field is set
    if ( $post_chapters ) {
 echo '<podcast:chapters url="'.$post_chapters .'" type="application/json"/>'.PHP_EOL;
    } else {
        return;
    }
	
	
}

add_filter( 'rss2_item', 'podcastindex_rss2_chapters' );



//Transcripts

function podcastindex_rss2_transcript( $content ) {

	if( !powerpress_is_podcast_feed() )
		return;

    global $post;
    $post_transcripts = get_post_meta( $post->ID, 'transcript');
    // add chapters only if the Custom Field is set
    if ( $post_transcripts ) {
		
		foreach( $post_transcripts as $post_transcript ) {
		echo "\t".'<podcast:transcript url="'.$post_transcript .'" type="application/json"/>'.PHP_EOL;
		}
		
		
 
    } else {
        return;
    }
	
	
}

add_filter( 'rss2_item', 'podcastindex_rss2_transcript' );



//Person
function podcastindex_rss2_person( $content ) {
		if( !powerpress_is_podcast_feed() )
		return;

    global $post;
    $post_people = get_post_meta( $post->ID, 'person');
    // add people only if the Custom Field is set
    if ( $post_people ) {
		
		foreach( $post_people as $post_person ) {
			$pieces = explode("\r\n", $post_person);

			
		echo "\t".'<podcast:person name="' .  $pieces[0] . '" role="'. $pieces[1] .'" img="' . $pieces[2] . '" href="' . $pieces[3] . '" />' .PHP_EOL;
		}
		
		
 
    } else {
        return;
    }
}


add_filter( 'rss2_item', 'podcastindex_rss2_person' );

// Soundbite

function podcastindex_rss2_soundbite( $content ) {
		if( !powerpress_is_podcast_feed() )
		return;

    global $post;
    $post_soundbites = get_post_meta( $post->ID, 'soundbite');
    // add soundbite only if the Custom Field is set
    if ( $post_soundbites ) {
		
		foreach( $post_soundbites as $post_soundbite ) {
			$pieces = explode("\r\n", $post_soundbite);

			
		echo "\t".'<podcast:soundbite startTime="'. $pieces[1] .'" duration="' . $pieces[2] . '">' . $pieces[0] . '</podcast:soundbite>'.PHP_EOL;
		}
		
		
 
    } else {
        return;
    }
}


add_filter( 'rss2_item', 'podcastindex_rss2_soundbite' );
?>