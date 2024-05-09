document.addEventListener('DOMContentLoaded', function() {
    const playButtons = document.querySelectorAll('.play_btn');
    let currentPlayingAudio = null;

    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            const audioId = this.getAttribute('data-audio-id');
            const audioElement = document.getElementById(audioId);

            // Stop and reset the currently playing audio if it's not the clicked one
            if (currentPlayingAudio && currentPlayingAudio !== audioElement) {
                currentPlayingAudio.pause();
                currentPlayingAudio.currentTime = 0;
                updatePauseLabel(currentPlayingAudio, false);
            }

            // Play the clicked audio, or pause if it was already playing
            if (audioElement.paused) {
                audioElement.play();
                updatePauseLabel(audioElement, true);
            } else {
                audioElement.pause();
                updatePauseLabel(audioElement, false);
            }

            currentPlayingAudio = audioElement.paused ? null : audioElement;
        });
    });

    function updatePauseLabel(audioElement, isPlaying) {
        const playButton = document.querySelector(`[data-audio-id="${audioElement.id}"]`);
        const instrTitle = playButton.nextElementSibling; // Assuming the <p class="instr-title"> is right after the div in the markup

        // Save the original instrument name if it's not already saved
        if (!instrTitle.getAttribute('data-original-text')) {
            instrTitle.setAttribute('data-original-text', instrTitle.textContent);
        }

        if (isPlaying) {
            instrTitle.textContent = "Pause";
        } else {
            // Restore the original instrument name
            instrTitle.textContent = instrTitle.getAttribute('data-original-text');
        }
    }
});
