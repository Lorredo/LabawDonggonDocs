<!-- //Wag mo isama tong file na to pre -->

<?php
require_once 'connection.php'; // Include the database connection file

class Read {
    // Private property to store database connection instance.
    // Encapsulation: Private property to store database connection instance.
    private $db; 

    // Constructor Method (Encapsulation)
    // Encapsulates the database connection object, ensuring the class always has access to a valid connection.
    // Constructor method to initialize the database connection
    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    // Method to fetch character information from a specified table
    public function getCharInfo($tableName, $columns = '*', $condition = '') {
        // Fetch data from the database
        $data = $this->fetchData($tableName, $columns, $condition);

         // Check if data is empty
        if (empty($data)) {
            echo "No data found.";
            return;
        }

        // Display fetched data

        $this->displayCharData($data); // Abstraction: Hides the complex logic of displaying data.
    }

    // Method to fetch assets from the database
    public function getAssets() {
        // Fetch assets data from the database
        $data = $this->fetchAssets();

        if (empty($data)) {
            echo "No assets found.";
            return;
        }

        // Display fetched assets
        $this->displayAssets($data); // Abstraction: Hides the complex logic of displaying assets.
    }

    // Method to fetch location data from the database
    public function getLocations() {
        // Fetch location data from the database
        $data = $this->fetchData('tbl_location', '*');
    
        // Check if data is empty
        if (empty($data)) {
            echo "No locations found.";
            return;
        }
    
        // Display fetched location data
        $this->displayLocations($data); // Abstraction: Hides the complex logic of displaying locations.
    }

    
//-----------------------------------------------------------------------------------------------------------------------------------
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

        <!-- Add jQuery and Owl Carousel JavaScript files -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

        <!-- Initialize Owl Carousel -->
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true
                });
            });
        </script>
        <?php
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
    
        <!-- Add jQuery and Isotope JavaScript files -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script>
            $(document).ready(function(){
                var $portfolio = $('.portfolio-container').isotope({
                    itemSelector: '.portfolio-item',
                    layoutMode: 'fitRows'
                });
                $('#portfolio-flters li').on('click', function() {
                    $("#portfolio-flters li").removeClass('active');
                    $(this).addClass('active');
                    $portfolio.isotope({ filter: $(this).data('filter') });
                });
            });
        </script>
        <?php
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
//-----------------------------------------------------------------------------------------------------------------------------------
    // Private method to fetch data from the database
    // Encapsulation: Hides the details of data fetching within the class.
    private function fetchData($tableName, $columns = '*', $condition = '') {
        // Connect to the database
        $conn = $this->db->connect();

        // Sanitize input parameters to prevent SQL injection
        $tableName = $conn->real_escape_string($tableName);
        $columns = $conn->real_escape_string($columns);
        $condition = $conn->real_escape_string($condition);

        // Construct SQL query
        $sql = "SELECT $columns FROM $tableName";
        if (!empty($condition)) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result === false) {
            // Handle query error
            echo "Error: " . $conn->error;
            return false;
        }

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn->close();
        return $data;
    }

    // Private method to fetch asset data from the database
    // Encapsulation: Hides the details of data fetching within the class.
    private function fetchAssets() {
        $conn = $this->db->connect();

        $result = $conn->query("SELECT * FROM tbl_assets");

        if ($result === false) {
            // Handle query error
            echo "Error: " . $conn->error;
            return false;
        }

        $data = [];

        // Fetch and return data as an array
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

         // Close database connection
        $conn->close();
        return $data;
    }
}
?>

<!-- Encapsulation: The Read class encapsulates all methods and properties related to fetching and displaying data, 
keeping them private or protected where appropriate to hide implementation details.

Abstraction: Methods like getCharInfo(), getAssets(), and getLocations() provide a simple interface to the users 
while hiding the complex logic of fetching and displaying data. -->