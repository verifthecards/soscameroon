<?php

    include('config/config.php');

    $sql = "SELECT * FROM items LIMIT 6";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<a href="#">
        <div class="max-w-sm w-full bg-white border hover:shadow" style="border:0.7px solid #ddd;border-radius:15px;width:350px;margin:10px;margin-bottom:30px" id="profil_card">
            <div class="w-full">
                <a href="#">
                    <img class="rounded-lg h-56 w-full" src="<?php echo $row["image_path"] ?>" alt="Image" style="border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;animation:none" />
                </a>
            </div>
            <div class="p-5 mt-3" id="profil_info">
                <a href="#">
                    <h3 class="text-yellow-500 font-bold mb-3 flex flex-wrap align-middle items-center">
                        <?php echo $row["category"]; ?>
                    </h3>
                    <h5 class="mb-2 font-bold text-2xl tracking-tight text-black" id="category_title">
                        <?php echo $row["title"] ?>
                    </h5>
                    <h6 class="mb-5 text-1xl text-gray-600 flex gap-1">
                        <img src="assets/icons/map.png" height="15" width="25" />
                        <?php echo $row["localisation"] ?>
                    </h6>
                </a>
                <p class="mb-3 font-normal text-1xl text-black-500">
                    <span class="flex align-middle items-center gap-1">
                        <img src="assets/icons/time.png" height="15" width="25" />
                        Publier depuis, <b><?php echo $row["date_add"] ?></b>
                    </span>
                </p>
                <div class="flex flex-wrap mt-6">
                    <a href="https://api.whatsapp.com/send?phone=237652148417&text=details.php?id=<?php echo $row["id"] ?>" class="btn border border-yellow-500 bg-transparent w-full p-2 text-center text-yellow-500 rounded-full mb-2 hover:shadow-lg hover:bg-yellow-500 hover:text-white">Copier le lien du bien</a>

                    <a href="details.php?id=<?php echo $row["id"] ?>" class="btn border border-black bg-black w-full p-2 text-center text-white rounded-full hover:shadow-lg">Voir les détails du bien</a>
                </div>
            </div>
        </div>
    </a>

<?php
    }
    } else {
        echo "Aucun article trouvé";
    }

    $conn->close();

?>