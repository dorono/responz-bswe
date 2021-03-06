module.exports = function(grunt) {

    'use strict';

    /* Load grunt tasks automatically
     * This reads package.json for grunt devDependencies and adds them so you don't have to type out
     * grunt.loadNpmTask(some-grunt-plugin);
     * for every plguin required run a grunt task.
     */
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times.
    require('time-grunt')(grunt);

    grunt.initConfig({
        config: {
            app: '../',
            temp: '.tmp',
            cssSrc: 'sass',
            cssDest: 'css',
            jsSrc: 'js',
            jsDest: 'js',
            imgSrc: 'img',
            imgDest: 'img'
        },

        // enable SASS and Compass
        compass: {
            all: {
                options: {
                    sassDir: '<%= config.cssSrc %>',
                    cssDir: '<%= config.temp %>/css',
                    relativeAsets: false,
                    assetCacheBuster: false
                }
            }
        },

        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 1 version']
            },
            dev: {
                expand: true,
                cwd: '<%= config.temp %>/css',
                src: '**/*.css',
                dest: '<%= config.temp %>/css',
            }
        },

        // Make sure code styles are up to par and there are no obvious mistakes
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporterOutput: '',
            },
            all: [
                '<%= config.jsSrc %>/{,*/}*.js',
                '!<%= config.jsSrc %>/ga.js',
                '!<%= config.app %>/<%= config.jsSrc %>/global.js'
            ]
        },

        concat: {
            scripts: {
                files: {
                    '<%= config.app %>/<%= config.jsDest %>/bswe.js': [
                        '<%= config.jsSrc %>/main.js',
                        '<%= config.jsSrc %>/ga.js'
                    ]
                }
            }
        },

        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    '<%= config.app %>/<%= config.jsDest %>/bswe.js': ['<%= config.app %>/<%= config.jsDest %>/bswe.js']
                }
            }
        },

        // Copies remaining files to places other tasks can use
        copy: {
            styles: {
                expand: true,
                dot: true,
                cwd: '<%= config.temp %>/css',
                dest: '<%= config.app %>/<%= config.cssDest %>/',
                src: '**/*.css',
                rename: function(dest, src) {
                    return dest + src.replace(/master.css/, 'bswe.css');
                }
            },

            scripts: {
                expand: true,
                dot: true,
                cwd: '<%= config.jsSrc %>',
                dest: '<%= config.app %>/<%= config.jsDest %>',
                src: ['**/*.js', '!*.js']
            }
        },

        // Empties folders to start fresh
        clean: {
            temp: {
                dot: true,
                src: [
                    '<%= config.temp %>'
                ]
            }
        },

        watch: {
            options: {
                debounceDelay: 500,
                livereload: true
            },
            gruntfile: {
                files: 'Gruntfile.js'
            },
            styles: {
                files: '<%= config.cssSrc %>/**/*.scss',
                tasks: ['compass', 'copy:styles']
            },
            html: {
                files: '<%= config.app %>/**/*.{html,php}'
            },
            scripts: {
                files: '<%= config.jsSrc %>/**/*.js',
                tasks: ['jshint', 'concat']
            }
        }
    });

    grunt.registerTask('default', [
        'clean:temp',
        'compass',
        'autoprefixer',
        'concat',
        'copy',
        'jshint',
        'watch'
    ]);

    grunt.registerTask('build', [
        'clean:temp',
        'compass',
        'autoprefixer',
        'concat',
        'uglify',
        'copy'
    ]);
};
