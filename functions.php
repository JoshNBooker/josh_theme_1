<?php 
// add dynamic title tag support
function jb_theme_support(){

}

function get_title(){
    /* ---BELOW IS THE CODE TO ACCESS MYSQL DB BLOG POSTS, I WILL LEAVE IT HERE FOR REFERENCE. 
    $id=isset($_GET['id']) ? $_GET['id'] : null;
    if (!$id) {
        return 'Josh Blog';
    } else {
        // pull id from MYSQL database and set title to blog post title
        $host = 'localhost';
        $username = 'root';
        $password = 'root';
        $database = 'blog_posts';
        $conn = new mysqli($host,$username,$password,$database);
          // Sanitize the input to prevent SQL injection
        $id = $conn->real_escape_string($id);

          // Your SQL query to retrieve the title based on the given $id
        $sql = "SELECT title FROM blog_posts WHERE id = '$id'";
        $result = $conn->query($sql);

          // Check if the query was successful
        if ($result) {
              // Fetch the title from the result
            $row = $result->fetch_assoc();
            $title = $row['Title'];

              // Close the database connection
            $conn->close();

            return $title;
        } else {
              // Handle the case where the query fails
            $conn->close();
            return 'Error retrieving title';
        }
    } */
  return 'Josh Blog';
};
add_action('after_theme_setup','jb_theme_support');

function jb_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus($locations);
};

add_action('init','jb_menus');

// register theme CSS
function jb_register_styles () {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('jb-style-sheet', get_template_directory_uri().'/style.css',array(), '1.0', 'all');
};

add_action('wp_enqueue_scripts','jb_register_styles');

add_action('init', 'add_cors_headers');

// register custom post type for code snippet

function create_code_snippet_post_type() {
  register_post_type('code_snippet',
      array(
          'labels' => array(
              'name' => __('Code Snippets'),
              'singular_name' => __('Code Snippet'),
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array('title', 'editor'),
      )
  );
}
add_action('init', 'create_code_snippet_post_type');

// Enable CORS
function add_cors_headers() {
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
  header("Access-Control-Allow-Credentials: true");
}

add_action('init', 'add_cors_headers');


?>