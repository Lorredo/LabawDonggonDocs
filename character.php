<?php
require_once 'databaseOperations.php';

class Character extends DatabaseOperations {
    // Method to fetch character information
    public function getCharInfo() {
        $data = $this->fetchData('tbl_characters');

        if (empty($data)) {
            echo "No data found.";
            return;
        }

        $this->displayCharData($data); // Abstraction: Hides the complex logic of displaying data.
    }

    // Private method to display character data
    // Encapsulation: Hides the details of data presentation within the class.
    // Private method to display character data
    private function displayCharData($data) {
        ?>
        <div class="container-fluid py-5" id="character">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Chars</h1>
                    <h1 class="position-absolute text-uppercase text-primary text-center">Characters of the Epiko</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            <?php foreach ($data as $row) : ?>
                                <div class="text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-3" src="<?php echo $row['char_img'];?>" style="width: 450px; height: 300px;">
                                    <h5 class="font-weight-bold m-0">
                                        <?php echo $row['char_name']; ?>
                                    </h5>
                                    <h6 class="font-weight-light mb-4">
                                        <?php echo $row['char_description']; ?>
                                    </h6>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
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
