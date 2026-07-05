</div>
<div class="p-5 text-center ">
	<h6>©<?php $this->options->title() ?></h6>
	<p class="h6"> Powered by <a href="https://luckynwa.top" target="_blank">luckyNwa</a></p>
</div>
<script src="https://imgs.luckynwa.top/profile/blog/jscss/jquery.pjax.min.js" type="application/javascript"></script>
<script src="https://imgs.luckynwa.top/profile/blog/jscss/nprogress_brave.min.js" type="application/javascript"></script>
<script>
	window.showSiteRuntime = function() {
        var site_runtime = $("#site_runtime");
		if (!site_runtime) return;
		window.setTimeout("showSiteRuntime()", 1000);
		start = new Date("<?php $this->options->lovetime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		site_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showSiteRuntime();

    $(document).pjax('a', '#pjax-container', {
        fragment: '#pjax-container',
        timeout: 6000
    });
    $(document).on('pjax:send', function() {
        NProgress.start();
    });
    $(document).on('pjax:complete', function() {
        <?php $this->options->pjax回调(); ?>
        NProgress.done();
    });
</script>
<script src="<?php $this->options->themeUrl('/base/main.js'); ?>"></script>
<?php $this->footer(); ?>
<?php $this->options->底部自定义(); ?>
</body>

</html>