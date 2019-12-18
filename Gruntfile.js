// Opciones

const src = 'src/';
const aux1 = 'auxiliar/';
const dest = 'resultado/';

// Plugins necesarios    

const pngquant = require('imagemin-pngquant');
const mozjpeg = require('imagemin-mozjpeg');
const gifsicle = require('imagemin-gifsicle');
const svgo = require('imagemin-svgo');

// Tareas

module.exports = function(grunt) {
	grunt.initConfig({
		// Redimensiones
		
		responsive_images: {
			dev: {
				options: {
					engine: "gm",
					sizes: [
						{ name: "sm", suffix: "_1x", quality: 60, width: 600 },
						{ name: "sm", suffix: "_2x", quality: 60, width: 1200 },
						{ name: "md", suffix: "_1x", quality: 60, width: 900 },
						{ name: "md", suffix: "_2x", quality: 60, width: 1800 },
						{ name: "lg", suffix: "_1x", quality: 60, width: 1440 },
						{ name: "lg", suffix: "_2x", quality: 60, width: 2880 }
					]        
				},        
				files: [{
					expand: true,
					src: ["**/*.{jpg,png}"],
					cwd: src,
					dest: aux1
				}]      
			}    
		},
		// OptimizaciĂłn
		
		imagemin: {
			// static: {
				// options: {
					// optimizationLevel: 3,
					// svgoPlugins: [{removeViewBox: false}],
					// use: [pngquant(), mozjpeg(), gifsicle()]
				// },
				// files: {
					// 'dist/img.png': 'src/img.png',
					// 'dist/img.jpg': 'src/img.jpg',
					// 'dist/img.gif': 'src/img.gif'
				// }
			// },
			dynamic: {
				options: {
					optimizationLevel: 3,
					svgoPlugins: [{removeViewBox: false}],
					use: [pngquant(), mozjpeg(), gifsicle(), svgo()]
				},
				files: [{
					expand: true,
					cwd: aux1,
					src: ['**/*.{png,jpg,gif}'],
					dest: dest
				}]
			}
		}
	});
	
	grunt.loadNpmTasks("grunt-responsive-images");
	grunt.loadNpmTasks("grunt-contrib-imagemin");
	
	grunt.registerTask('pasoreducir', ['responsive_images']);
	grunt.registerTask('pasooptimizar', ['imagemin']);
	
	grunt.registerTask('default', ['responsive_images', 'imagemin']);
};