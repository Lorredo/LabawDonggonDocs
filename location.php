<?php
require_once 'databaseOperations.php';

class Location extends DatabaseOperations {
    // Method to fetch location data
    public function getLocations() {
        $data = $this->fetchData('tbl_location');

        if (empty($data)) {
            echo "No locations found.";
            return;
        }

        $this->displayLocations($data); // Abstraction: Hides the complex logic of displaying data.
    }

   // Private method to display location data
    // Encapsulation: Hides the details of data presentation within the class.
    private function displayLocations($data) {
        if (count($data) > 0) {
            ?>
            <div class="container-fluid pt-5" id="location">
                <div class="container">
                    <div class="position-relative d-flex align-items-center justify-content-center">
                        <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Setting</h1>
                        <h1 class="position-absolute text-uppercase text-primary text-center">Game Settings</h1>
                    </div>
                    <div class="row">
                        <?php foreach ($data as $row) : ?>
                            <div class="col-lg-4 mb-5">
                                <div class="map-container position-relative mb-4" data-toggle="modal" data-target="#mapModal">
                                    <img class="img-fluid rounded w-100" src="<?php echo $row['map_file']; ?>" alt="">
                                    <div class="map-overlay">
                                        <span>Click to enlarge</span>
                                    </div>
                                </div>
                                <h5 class="font-weight-medium mb-4"><?php echo $row['map_name']; ?></h5>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo "No items found.";
        }
    }
}
?>

<!-- Encapsulation: The Read class encapsulates all methods and properties related to fetching and displaying data, 
keeping them private or protected where appropriate to hide implementation details.

Abstraction: Methods like getCharInfo(), getAssets(), and getLocations() provide a simple interface to the users 
while hiding the complex logic of fetching and displaying data. -->
