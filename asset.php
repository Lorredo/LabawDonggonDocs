<?php
require_once 'databaseOperations.php';

class Asset extends DatabaseOperations {
    // Method to fetch asset data
    public function getAssets() {
        $data = $this->fetchData('tbl_assets');

        if (empty($data)) {
            echo "No assets found.";
            return;
        }

        $this->displayAssets($data); // Abstraction: Hides the complex logic of displaying data.
    }

    // Private method to display asset data
    // Encapsulation: Hides the details of data presentation within the class.
     // Private method to display asset data
     private function displayAssets($data) {
        ?>
        <div class="container-fluid pt-5 pb-3" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Assets</h1>
                    <h1 class="position-absolute text-uppercase text-primary text-center">Game Assets</h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".sprites">Sprites</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".pictures">Pictures</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".audio">Audio</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <?php foreach ($data as $row) : ?>
                        <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?php echo $row['asset_type']; ?>">
                            <div class="position-relative overflow-hidden mb-2 asset-item">
                                <?php if ($row['asset_type'] == 'audio') : ?>
                                    <audio controls class="w-100">
                                        <source src="<?php echo $row['asset_data']; ?>" type="audio/mpeg">
                                    </audio>
                                <?php else : ?>
                                    <img class="img-fluid rounded w-100" src="<?php echo $row['asset_data']; ?>" alt="">
                                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                        <a href="<?php echo $row['asset_data']; ?>" data-lightbox="portfolio">
                                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    
                                    
        <?php
    }

}
?>

<!-- Encapsulation: The Read class encapsulates all methods and properties related to fetching and displaying data, 
keeping them private or protected where appropriate to hide implementation details.

Abstraction: Methods like getCharInfo(), getAssets(), and getLocations() provide a simple interface to the users 
while hiding the complex logic of fetching and displaying data. -->