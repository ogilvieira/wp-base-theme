module.exports = function(grunt) {
  var project_files = {
      javascript: [
        './assets/js/src/lib/**.js',
        './assets/js/src/modules/**.js',
        './assets/js/src/app.js',
        './assets/js/src/page/**.js',
      ],
      stylesheet: [
        './assets/styles/src/lib/*.css',
        './assets/styles/src/app.css',
      ],
  };
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      sass: {
        files: './assets/styles/sass/**/*.scss',
        tasks: ['sass', 'cssmin'],
      },
      css: {
        files: project_files.stylesheet,
        tasks: ['cssmin'],
      },
      javascript: {
        files: project_files.javascript,
        tasks: ['uglify']
      },
    },
    uglify: {
      options: {
        banner: '/*===================================================== \n'
                +'= <%= pkg.siteName %> \n'
                +'= by <%= pkg.author %> \n'
                +'= [LAST BUILD: <%= grunt.template.today("yyyy-mm-dd HH:MM:ss") %>] \n'
                +'=====================================================*/\n'
      },
      build: {
        src: project_files.javascript,
        dest: './assets/js/build/app.js'
      }
    },
    cssmin : {
      options : {
        keepSpecialCommets: 0,
      },
      dist: {
        src: project_files.stylesheet,
        dest: './assets/styles/build/app.css'
      }
    },
    sass : {
      dist: {
        options: {
          style: 'expanded',
          lineNumbers: false, // 1
          sourcemap: 'none',
          options: {
            forceWatchMethod: true,
          }
        },
        files: [{
          expand: true, // 2
          cwd: './assets/styles/sass',
          src: [ '**/*.scss' ],
          dest: './assets/styles/src/',
          ext: '.css'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['sass','cssmin','uglify']);
};