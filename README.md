# wp-plugin-latest-posts-shortcode
# made by alexphex & ChatGPT

# Latest Posts Shortcode

## Description
Latest Posts Shortcode is a simple WordPress plugin that allows you to display the latest blog posts anywhere on your site using the shortcode `[latest_posts count="5"]`. You can customize the number of posts displayed by changing the `count` attribute.

## Features
- Display latest blog posts using a shortcode
- Customize the number of posts displayed
- Uses `WP_Query` for efficient querying
- Safe and optimized code

## Installation
1. Download the plugin files and upload them to the `/wp-content/plugins/latest-posts-shortcode/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Insert the shortcode `[latest_posts count="5"]` into any post or page.

## Usage
Simply use the following shortcode in a post, page, or widget:
```
[latest_posts count="3"]
```
This will display the 3 latest blog posts. You can change the `count` parameter to any number.

## Example Output
```
<ul>
    <li><a href="post-link-1">Post Title 1</a></li>
    <li><a href="post-link-2">Post Title 2</a></li>
    <li><a href="post-link-3">Post Title 3</a></li>
</ul>
```

## Requirements
- WordPress 5.0+
- PHP 7.0+

## Customization
To modify the plugin, edit the `latest-posts-shortcode.php` file in the plugin folder. You can:
- Add a CSS class to style the output
- Extend the shortcode to include post thumbnails or excerpts
- Add more filtering options, such as category selection

## Contributing
Feel free to fork this repository and submit pull requests with improvements or bug fixes.

## License
This plugin is released under the MIT License.

## Author
Developed by alexphex & ChatGPT

