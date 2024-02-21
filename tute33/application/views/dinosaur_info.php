<!-- Tute 3 Exercise 2 -->
<?php $this->load->helper('url'); ?>
<h1><?php echo $period; ?> Dinosaurs</h1>
<ul>
<?php foreach ($dinosaurs as $dinosaur): ?>
    <li><?php echo $dinosaur; ?></li>
<?php endforeach; ?>
</ul>
<a href="<?php echo base_url('Dinosaurs/periods'); ?>">Back to Dinosaur Periods</a>
