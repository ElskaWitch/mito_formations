<div class="px-4 2xl:px-32 py-10  ">
    <h2 class=" underline text-4xl font-bold py-10 text-center">Nos Formations</h2>
    <div class="md:grid grid-cols-3 gap-4 ">
        <?php
        include("data-card.php");
        foreach ($data_card as $data) {
            include("_section2-card.php");
        }
        ?>
    </div>
</div>
<hr>