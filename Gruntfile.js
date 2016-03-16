module.exports = function(grunt) {
  var project_files = {
      javascript: [
        '!./assets/js/app.min.js',
        './assets/js/lib/**.js',
        './assets/js/modules/**.js',
        './assets/js/app.js',
        './assets/js/page/**.js',
      ],
      stylesheet: [
        '!./assets/css/app.min.css',
        './assets/css/lib/*.css',
        './assets/css/*.css',
      ],
  };
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
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
        dest: 'assets/js/app.min.js'
      }
    },
    cssmin : {
      options : {
        keepSpecialCommets: 1,
      },
      dist: {
        src: project_files.stylesheet,
        dest: './assets/css/app.min.css'
      }
    },    
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['cssmin','uglify']);
};