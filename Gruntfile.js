/*global module:false*/
module.exports = function(grunt) {

    "use strict";

    require('./package.json');

    var settings         = require('./package.json'),
        themeFolder      = settings.themeSettings.themeFolder,
        themeName        = settings.themeSettings.themeName,
        themeAuthor      = settings.themeSettings.themeAuthor,
        themeAuthorURL   = settings.themeSettings.themeAuthorURL,
        themeDescription = settings.themeSettings.themeDescription,
        themeVersion     = settings.themeSettings.themeVersion,
        themePrefix      = settings.themeSettings.themePrefix,
        themePath        = 'app/wp-content/themes/' + themeFolder + '/';

    // Project configuration.
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        clean: {
            // target: themePath,
            root: [themePath + '**/*.php', themePath + 'page-templates/', themePath + '**/*.ico', themePath + '*.png', themePath + '**/*.pdf', themePath + 'inc/', themePath + 'fonts/', themePath + 'modules/'],
            images: themePath + 'img/',
            css: themePath + 'style.css',
            admin: themePath + 'style-admin.css',
            js: themePath + 'js/'
        },
        copy: {
            root: {
                files: [
                    {
                        expand: true,
                        cwd: 'theme',
                        src: ['*.php', 'fonts/**/*', 'page-templates/**/*', 'modules/**/*', 'inc/**/*', '*.ico', '*.png', '*.pdf'],
                        dest: themePath
                    }

                ]
            },
            images: {
                files: [
                    {
                        expand: true,
                        cwd: 'theme',
                        src: ['img/**/*'],
                        dest: themePath
                    }

                ]
            },
            jsadmin: {
                files: [
                    {
                        expand: true,
                        cwd: 'theme',
                        src: ['js/admin.js'],
                        dest: themePath
                    }

                ]
            }
        },
        less_import_options: {
            css: {
                src: [
                    'theme/css/includes/vars.less',
                    'theme/css/libs/*.less',
                    'theme/css/includes/icons.less',
                    'theme/css/includes/fonts.less',
                    'theme/css/includes/mixins.less',
                    'theme/css/includes/extends.less',
                    'theme/css/includes/wp-core.less',
                    'theme/css/global/*.less',
                    'theme/css/partials/*.less',
                    'theme/css/pages/*.less',
                    'theme/css/modules/*.less'
                ],
                dest: 'theme/css/style.less'
            }
        },
        less: {
            css: {
                options: {
                    compile: true
                },
                dest: themePath + 'style.css',
                src: [
                    'theme/css/style.less'
                ]
            },
            admin: {
                options: {
                    compile: true
                },
                dest: themePath + 'style-admin.css',
                src: [
                    'theme/css/admin.less'
                ]
            }
        },
        concat: {
            libs: {
                src: [
                    'theme/js/libs/*.js',
                    'theme/js/development/*.js'
                ],
                dest: themePath + 'js/scripts.js'
            }
        },
        webfont: {
            less: {
                options: {
                    templateOptions: { classPrefix: '.' + themePrefix + '-icon-' },
                    relativeFontPath: '../' + themeFolder + '/fonts',
                    stylesheet: 'less',
                    font: 'icons',
                    htmlDemo: false,
                    template: 'webfont/webfont-template.css'
                },
                src: 'theme/vectors/*.svg',
                dest: 'theme/fonts',
                destCss: 'theme/css/includes'
            }
        },
        autoprefixer: {
            single_file: {
                options: {
                    browsers: ['last 2 version', 'ie 8']
                },
                src: themePath + 'style.css',
                dest: themePath + 'style.css'
            }
        },
        watch: {
            root: {
                files: ['theme/*.php', 'theme/fonts/**/*', 'theme/page-templates/**/*', 'theme/modules/**/*', 'theme/inc/**/*', 'theme/*.ico', 'theme/*.png', 'theme/*.pdf'],
                tasks: ['root']
            },
            images: {
                files: 'theme/img/**/*',
                tasks: ['images']
            },
            css: {
                files: 'theme/css/**/*.less',
                tasks: ['build-less']
            },
            admincss: {
                files: 'theme/css/admin.less',
                tasks: ['admin']
            },
            js: {
                files: 'theme/js/**/*.js',
                tasks: ['build-js']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-webfont');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-less-import-options');

    grunt.registerTask('watcher', [
        'default',
        'watch'
    ]);

    grunt.registerTask('root', [
        'clean:root',
        'copy:root'
    ]);

    grunt.registerTask('images', [
        'clean:images',
        'copy:images'
    ]);

    grunt.registerTask('css', [
        'clean:css',
        'build-less',
        'nameTheme'
    ]);

    grunt.registerTask('admin', [
        'clean:admin',
        'less:admin'
    ]);

    grunt.registerTask('build-less', [
        'clean:css',
        'less_import_options',
        'less:css',
        'autoprefixer',
        'nameTheme'
    ]);

    grunt.registerTask('build-js', [
        'concat',
        'copy:jsadmin'
    ]);

    // Default task.
    grunt.registerTask('default', [
        'root',
        'images',
        'admin',
        'build-less',
        'build-js'
    ]);

    // Production task.
    grunt.registerTask('prod', ['clean', 'less:dev', 'copy', 'autoprefixer', 'nameTheme', 'less:prod']);

    // Handy function to add the necessary WordPress information to the generated CSS file.
    grunt.registerTask('nameTheme', 'Add required WordPress Header to CSS file', function() {

        var file = themePath + '/style.css',
            fileContents = grunt.file.read(file),
            wpInfo = "/*\nTheme Name: " + themeName + "\nAuthor: " + themeAuthor + "\nAuthor URI: " + themeAuthorURL + "\nDescription: " + themeDescription + "\nVersion: " + themeVersion + "\n*/\n";

        grunt.file.write(file, wpInfo + fileContents);

    });
};