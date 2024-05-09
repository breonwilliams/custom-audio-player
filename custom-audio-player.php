<?php
/*
Plugin Name: Custom Audio Player
Plugin URI:  http://author.breonwilliams.com
Description: A custom audio player that allows playing different audio files by clicking on images.
Version:     1.0
Author:      Your Name
Author URI:  http://author.breonwilliams.com
*/

// Enqueue the CSS
function cap_enqueue_styles()
{
    wp_enqueue_style('custom-audio-player-style', plugins_url('style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'cap_enqueue_styles');

// Enqueue the JavaScript
function cap_enqueue_scripts()
{
    wp_enqueue_script('custom-audio-player-script', plugins_url('script.js', __FILE__), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'cap_enqueue_scripts');

// Shortcode Functionality
function cap_audio_player_shortcode()
{
    ob_start(); // Start output buffering
?>
    <style>
        #instrument-1 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_1.svg', __FILE__); ?>');
        }

        #instrument-2 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_2.svg', __FILE__); ?>');
        }

        #instrument-3 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_3.svg', __FILE__); ?>');
        }

        #instrument-4 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_4.svg', __FILE__); ?>');
        }

        #instrument-5 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_5.svg', __FILE__); ?>');
        }

        #instrument-6 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_6.svg', __FILE__); ?>');
        }

        #instrument-7 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_7.svg', __FILE__); ?>');
        }

        #instrument-8 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_8.svg', __FILE__); ?>');
        }

        #instrument-9 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_9.svg', __FILE__); ?>');
        }

        #instrument-10 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_10.svg', __FILE__); ?>');
        }

        #instrument-11 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_11.svg', __FILE__); ?>');
        }

        #instrument-12 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_12.svg', __FILE__); ?>');
        }

        #instrument-13 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_13.svg', __FILE__); ?>');
        }

        #instrument-14 {
            background-image: url('<?php echo plugins_url('instruments/images/instrument_14.svg', __FILE__); ?>');
        }
    </style>

    <div class="instruments-container">
        <!-- HTML content for the audio player -->
        <section class="sound-instrument-1">
            <audio id="sound-instrument-1">
                <source src="<?php echo plugins_url('instruments/audio/instrument_1.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-1" data-audio-id="sound-instrument-1"></div>
            <p class="instr-title">Electric Guitar</p>
        </section>

        <section class="sound-instrument-2">
            <audio id="sound-instrument-2">
                <source src="<?php echo plugins_url('instruments/audio/instrument_2.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-2" data-audio-id="sound-instrument-2"></div>
            <p class="instr-title">Bass Guitar</p>
        </section>

        <section class="sound-instrument-3">
            <audio id="sound-instrument-3">
                <source src="<?php echo plugins_url('instruments/audio/instrument_3.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-3" data-audio-id="sound-instrument-3"></div>
            <p class="instr-title">Acoustic Guitar</p>
        </section>

        <section class="sound-instrument-4">
            <audio id="sound-instrument-4">
                <source src="<?php echo plugins_url('instruments/audio/instrument_4.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-4" data-audio-id="sound-instrument-4"></div>
            <p class="instr-title">Harp</p>
        </section>

        <section class="sound-instrument-5">
            <audio id="sound-instrument-5">
                <source src="<?php echo plugins_url('instruments/audio/instrument_5.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-5" data-audio-id="sound-instrument-5"></div>
            <p class="instr-title">Piano</p>
        </section>

        <section class="sound-instrument-6">
            <audio id="sound-instrument-6">
                <source src="<?php echo plugins_url('instruments/audio/instrument_6.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-6" data-audio-id="sound-instrument-6"></div>
            <p class="instr-title">Violin</p>
        </section>

        <section class="sound-instrument-7">
            <audio id="sound-instrument-7">
                <source src="<?php echo plugins_url('instruments/audio/instrument_7.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-7" data-audio-id="sound-instrument-7"></div>
            <p class="instr-title">Trumpet</p>
        </section>

        <section class="sound-instrument-8">
            <audio id="sound-instrument-8">
                <source src="<?php echo plugins_url('instruments/audio/instrument_8.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-8" data-audio-id="sound-instrument-8"></div>
            <p class="instr-title">Clarinet</p>
        </section>

        <section class="sound-instrument-9">
            <audio id="sound-instrument-9">
                <source src="<?php echo plugins_url('instruments/audio/instrument_9.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-9" data-audio-id="sound-instrument-9"></div>
            <p class="instr-title">Saxophone</p>
        </section>

        <section class="sound-instrument-10">
            <audio id="sound-instrument-10">
                <source src="<?php echo plugins_url('instruments/audio/instrument_10.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-10" data-audio-id="sound-instrument-10"></div>
            <p class="instr-title">Flute</p>
        </section>

        <section class="sound-instrument-11">
            <audio id="sound-instrument-11">
                <source src="<?php echo plugins_url('instruments/audio/instrument_11.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-11" data-audio-id="sound-instrument-11"></div>
            <p class="instr-title">Keyboard</p>
        </section>

        <section class="sound-instrument-12">
            <audio id="sound-instrument-12">
                <source src="<?php echo plugins_url('instruments/audio/instrument_12.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-12" data-audio-id="sound-instrument-12"></div>
            <p class="instr-title">Organ</p>
        </section>

        <section class="sound-instrument-13">
            <audio id="sound-instrument-13">
                <source src="<?php echo plugins_url('instruments/audio/instrument_13.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-13" data-audio-id="sound-instrument-13"></div>
            <p class="instr-title">Drums</p>
        </section>

        <section class="sound-instrument-14">
            <audio id="sound-instrument-14">
                <source src="<?php echo plugins_url('instruments/audio/instrument_14.mp3', __FILE__); ?>" type="audio/mpeg">
            </audio>
            <div class="play play_btn" id="instrument-14" data-audio-id="sound-instrument-14"></div>
            <p class="instr-title">Bongos & Congas</p>
        </section>
    </div>
<?php
    return ob_get_clean(); // Return the content collected during the buffering
}
add_shortcode('custom_audio_player', 'cap_audio_player_shortcode');
