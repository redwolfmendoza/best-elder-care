/*
    How to install Grunt using console:

    $ sudo npm install grunt-cli --save-dev
    $ sudo npm install grunt --save-dev
    $ sudo npm install grunt-contrib-sass
    $ sudo npm install grunt-contrib-uglify
    $ sudo npm install grunt-cssbeautifier
    
*/


//"use strict";
module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        
        
        
        //WATCH (watch for updates to certain files and automatically run Grunt tasks)
        watch: {
            scripts: {
                files: [
                    'css/scss/style.scss',
                    'css/scss/onetrust-custom.scss',
                    'js/source/my.js'
                ],
                tasks: ['default'],
                options: {
                    spawn: false,
                },
            },
        },
        
        
        
        // SASS compiler/minifier (generates minified CSS, good for page load times)
		sass: {
			options: {
				style: 'compressed'
			},
			dist: {
				files: {
                    'css/besteldercare-theme.min.css': 'css/besteldercare-theme.scss'
				}
			}
		},
        
        
                
        // JS minifier/uglifier (generates minified JS, good for page load times)
        uglify: {
			staging: {
				files: {
					'js/bc-script.min.js': ['js/bc-script.js']
                    
                    
                    
                    
                    
                    // These below are not needed, but let's list them here
                    //'js/bootstrap.min.js': ['js/bootstrap.js'],
                    //'js/jquery.min.js': ['js/jquery.js'],
				}
			}
		},
        
        
        
        
        // CSS beautifier (makes minified CSS human-readable again)
        cssbeautifier : {
            files : ["css/style.min.css"],
            options : {
                indent: '   ',
                openbrace: 'end-of-line',
                autosemicolon: true
            }
        },
        

        
        
            
        
        
	});
    
    
    //load Grunt plugins (install these first)
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-cssbeautifier');
    
	
	//define Grunt tasks (custom console params for differnet batch jobs)
	grunt.registerTask('default', ['sass', 'uglify']);
    grunt.registerTask('css', ['sass']);
    grunt.registerTask('js', ['uglify']);
    grunt.registerTask('pretty', ['sass', 'cssbeautifier']);
    

};