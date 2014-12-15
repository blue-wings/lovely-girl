<div class="clearfix"></div>
<div class="stepwizard" style="margin-top:40px;">
	    <div class="stepwizard-row">
	    	<?php $result2 = mysql_query("select * from wp_term_taxonomy where taxonomy = 'category' ORDER BY term_taxonomy_id DESC limit 0,6");  while ($row=mysql_fetch_array($result2)) { ?>
	        <div class="stepwizard-step">
	            <a href="<?php echo get_category_link(''. $row['term_id'] .'') ?>"><button type="button" class="btn btn-default btn-circle"></button></a>
	            <a href="<?php echo get_category_link(''. $row['term_id'] .'') ?>"><p><?php echo get_cat_name(''. $row['term_id'] .'') ?></p></a>
	        </div>
	        <?php } ?>
	    </div>
    </div>
<div class="clearfix"></div>

</div>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cat.js"></script>
<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4e55b99038ab9957819b2656a223acc3' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>