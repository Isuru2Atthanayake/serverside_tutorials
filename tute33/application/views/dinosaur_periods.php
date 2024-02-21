<!-- Tute 3 Exercise 2 -->
<?php $this->load->helper('url'); ?>
<h1>Dinosaur Periods</h1>
<ul>
<?php foreach ($periods as $period => $info): ?>
    <li><a href="<?php echo base_url('index.php/Dinosaurs/getinfo/' . $period); ?>"><?php echo $period; ?></a></li>
<?php endforeach; ?>
</ul>
