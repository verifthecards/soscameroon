<?php

    include('config/config.php');

    $sql = "SELECT * FROM video WHERE date_add";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        <a href="#">
            <div class="max-w-sm w-full bg-white border hover:shadow" style="border:0.7px solid #ddd;border-radius:15px;width:350px;margin:10px;margin-bottom:30px" id="profil_card">
                <div class="w-full">
                    <a href="#">
                        <img class="rounded-lg h-56 w-full" src="assets/img/video.png" alt="Image" style="border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;animation:none" />
                    </a>
                </div>
                <div class="p-5 mt-3" id="profil_info">
                    <a href="#">
                        <h5 class="mb-2 font-bold text-1xl tracking-tight text-black" id="category_title">
                            <?php echo $row["title"] ?>
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-1xl text-black-500">
                        <span class="flex align-middle items-center gap-1">
                            <img src="assets/icons/time.png" height="15" width="25" />
                            Publier depuis, <b><?php echo $row["date_add"] ?></b>
                        </span>
                    </p>
                    <div class="flex flex-wrap mt-6">
                        <a href="watch.php?id=<?php echo $row["id"] ?>" class="btn border border-black bg-black w-full p-2 text-center text-white rounded-full hover:shadow-lg">Lire la vidéo</a>
                    </div>
                </div>
            </div>
        </a>

<?php
        }
    } else {
        echo "<h2 class='font-bold text-3xl text-black mt-6'>Aucune vidéo disponible !</h2>";
    }

    $mysqli->close();
?>