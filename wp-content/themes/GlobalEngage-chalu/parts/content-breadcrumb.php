<?php if (!empty($section_data)): 
    $breadcrumb_text = $section_data['breadcrumb_text'];
?>
<section id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home</strong></a></li>
            <storng>/</storng>
            <?php if (!empty($breadcrumb_text)) { ?>
                <li><?php echo $breadcrumb_text; ?></li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php endif; ?>
