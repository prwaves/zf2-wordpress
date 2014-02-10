module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    compass: {
      all: {
        options: {
          environment: 'production',
          outputStyle: 'expanded',
          extensionsDir: 'css/sass/extensions/',
          //projectPath: 'wp-content/themes/turnstile',
          generatedImagesDir: 'public/img',
          //httpGeneratedImagesPath: '/wp-content/themes/turnstile/images',
          sassPath: 'public/css/sass',
          cssPath: 'public/css',
          specify: [
            'public/css/sass/style.scss',
            'public/css/sass/ie8.scss',
            'public/css/sass/ie9.scss'
          ]
        }
      }
    },

    copy: {
      main: {
        files: [{
          expand: true,
          //flatten: true,
          cwd: 'wp-src/themes/',
          src: ['**'],
          dest: 'public/blog/wp-content/themes',
          //filter: 'isFile'
        },
        {src: 'config/wp-config.php', dest: 'public/blog/wp-config.php'}

        ]
      },
    },   

    watch: {
      options: {
        debounceDelay: 1000
      },

      compass: {
        files: 'css/**/*.scss',
        tasks: 'compass:all'
      },
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('build', ['compass:all', 'copy:main']);
  grunt.registerTask('default', ['compass:all', 'copy:main']);
};
