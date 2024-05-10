<!-- Loop through $questions array to display question listings -->
<?php foreach ($questions as $question): ?>
    <div class="question">
        <h2><a href="<?php echo base_url('question/view/'.$question->id); ?>"><?php echo $question->title; ?></a></h2>
        <p><?php echo $question->description; ?></p>
    </div>
<?php endforeach; ?>