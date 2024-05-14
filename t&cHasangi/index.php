<?php
 
    // connect with database
    include_once 'config.php';
 
    // fetch all FAQs from database
    $sql = "SELECT * FROM `faqs` ORDER BY `id` DESC";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();
    $faqs = $result->fetch_all(MYSQLI_ASSOC);
 
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>

    <body style="background-color:black;"> 
    <h1 style= "text-indent: 50px;font-size: 60px"> FAQs </h1> 
    <h2 style="text-align:center;font-size: 60px"> Top Questions </h2>

<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="index_style.css">

<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- show all FAQs as an accordion -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="accordion">
                <?php foreach ($faqs as $faq): ?>
                    <div class="accordion-item">
                        <input type="checkbox" id="faq-<?php echo $faq['id']; ?>" class="accordion-toggle">
                        <label for="faq-<?php echo $faq['id']; ?>" class="accordion-header">
                            <?php echo $faq['question']; ?>
                        </label>
                        <div class="accordion-content">
                            <div class="text-accordion">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>