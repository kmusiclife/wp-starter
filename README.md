# wp-starter

wp-starter is a WordPress theme that encompasses the essential basic features required to create a custom WordPress theme. It is built upon kmusiclife's [bs5-starter](https://github.com/kmusiclife/bs5-starter), providing a solid foundation for your WordPress projects.

## Features

- Incorporates the minimum required functionality for developing a WordPress theme.
- Utilizes the [bs5-starter](https://github.com/kmusiclife/bs5-starter) by kmusiclife as the base for [wp-starter](https://github.com/kmusiclife/wp-starter).
- Uploader files are automatically renamed to random filenames for enhanced security.
- Includes a Page Content feature that can be utilized as site particles.
- Page Content titles can be retrieved using the function `get_custom_content('title')`.
- Provides a pre-defined `post_type` named "topics". You can easily add more post types by editing the `functions.php` file.

## Getting Started

To get started with wp-starter, follow these steps:

1. Download and Install WordPress
```
wp core download --locale=en
wp config create --dbhost=HOST --dbuser=USER --dbpass=PASS --dbname=DBNAME
cd wp-content/themes
```

2. Clone the repository on theme directory:

```bash
git clone https://github.com/kmusiclife/wp-starter.git
```

3. Activate wp-starter theme in your WordPress Management page.

4. Customize the theme according to your project requirements by editing the relevant files, such as `style.css`, `functions.php`, and the template files in the `templates` directory.


## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, please open an issue or submit a pull request on the [GitHub repository](https://github.com/kmusiclife/wp-starter).

## License

This project is licensed under the Apache2.0 License.
