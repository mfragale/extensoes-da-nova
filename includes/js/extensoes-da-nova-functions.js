jQuery(document).ready(function ($) {

	console.log('Extensões da Nova js loaded');


	// Autoplays any video with the css class .lwp-video-autoplay
	if ($('.lwp-video-autoplay .et_pb_video_box').length !== 0) {
		$('.lwp-video-autoplay .et_pb_video_box').find('video').prop('muted', true);
		$(".lwp-video-autoplay .et_pb_video_box").find('video').attr('loop', 'loop');
		$(".lwp-video-autoplay .et_pb_video_box").find('video').attr('playsInline', '');

		$(".lwp-video-autoplay .et_pb_video_box").each(function () {
			$(this).find('video').get(0).play();
		});
		$('.lwp-video-autoplay .et_pb_video_box').find('video').removeAttr('controls');
	}

});
