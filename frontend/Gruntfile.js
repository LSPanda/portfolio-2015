"user strict";

module.exports = function( grunt ) {

	grunt.loadNpmTasks( "kouto-swiss" );
	grunt.loadNpmTasks( "grunt-contrib-stylus" );
	grunt.loadNpmTasks( "grunt-contrib-jade" );
	grunt.loadNpmTasks( "grunt-contrib-uglify" );
	grunt.loadNpmTasks( "grunt-notify" );
	grunt.loadNpmTasks( "grunt-contrib-watch" );


	grunt.initConfig( {
		"stylus": {
			"styles": {
		      "options": {
		        "compress": true, // - Change value to have lisible CSS
				"use": [
					require("kouto-swiss")
				]
		      },
		      "files": {
		        "bin/assets/css/main-min.css": "src/styl/main.styl",
		        "../backend/assets/css/main-min.css": "src/styl/main.styl"
		      }
		    }
		},
		"jade": {
			"html": {
				"options": {
					"pretty": true, // - Change value to have lisible HTML
					"data": {
						"debug": false,
					},
				},
				"files": { // - Add jade's fill to compile here
					"bin/index.html": "src/jade/main.jade",
					"bin/html/works.html": "src/jade/works.jade",
					"bin/html/work.html": "src/jade/work.jade",
					"bin/html/blogs.html": "src/jade/blogs.jade",
					"bin/html/blog.html": "src/jade/blog.jade",
					"bin/html/about.html": "src/jade/about.jade"
				}
			}
		},
		"uglify": {
			"scripts": {
				"files": {
					"bin/assets/js/script-min.js": "src/js/script.js",
					"../backend/assets/js/script.js": "src/js/script.js"
				}
			}
		},
		"notify_hooks": {
			"options": {
				"enabled": true,
				"max_jshint_notifications": 5,
				"success": true, // - Change value to see notify only for errors
				"duration": 3
			}
		},
		"watch": {
			"styles": {
				"files": [ "src/styl/**/*.styl" ],
				"tasks": [ "stylus:styles", "notify_hooks" ]
			},
			"html": {
				"files": [ "src/jade/**/*.jade" ],
				"tasks": [ "jade:html", "notify_hooks" ]
			},
			"scripts": {
				"files": [ "src/js/*.js" ],
				"tasks": [ "uglify:scripts", "notify_hooks" ]
			}
		}
	} );

	grunt.registerTask( "work", [
		"jade",
		"stylus",
		"uglify",
		"notify_hooks",
		"watch"
	] );
};
