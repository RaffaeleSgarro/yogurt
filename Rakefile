task :default => [:css]

task :css do
	require "sass"
	Sass.compile_file "style.scss", "style.css"
	puts "Generated style.css"
end

