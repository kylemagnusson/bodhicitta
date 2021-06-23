var grunt = require('grunt');

module.exports = function(grunt){
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['less', 'uglify', 'watch']);

	grunt.initConfig({
		less: {
		    dist: {
		    	options: {
		        	compress: true
		    	},
			  	files: {
					'wp-content/themes/rock-star/css/style.css': 'wp-content/themes/rock-star/less/style.less'
		    	}
			}
		},
		uglify: {
			options: {
				mangle: false
			},
			target: {
				files: {
					'wp-content/themes/rock-star/js/template.min.js':
					[
						'wp-content/themes/rock-star/js/audio-script.min.js',
						'wp-content/themes/rock-star/js/custom-scripts.min.js',
						'wp-content/themes/rock-star/js/customizer-custom-scripts.min.js',
						'wp-content/themes/rock-star/js/customizer.min.js',
						'wp-content/themes/rock-star/js/fitvids.min.js',
						'wp-content/themes/rock-star/js/html5.min.js',
						'wp-content/themes/rock-star/js/metabox.min.js',
						'wp-content/themes/rock-star/js/navigation.min.js',
						'wp-content/themes/rock-star/js/scrollup.min.js',
						'wp-content/themes/rock-star/js/skip-kink-focus-fix.min.js',
						'wp-content/themes/rock-star/js/template.js',
						'wp-content/themes/rock-star/js/widget.min.js'
					]
				}
			}
		},
		watch: {
			css: {
				files: [
						'wp-content/themes/rock-star/less/*.less'
				],
				tasks: ['less'],
				options: {
					livereload: true
				},
			},
			js: {
				files: [
							'wp-content/themes/rock-star/js/template.js'
						],
				tasks: ['uglify'],
				options: {
					livereload: true
				},
			},
		}
	});
};