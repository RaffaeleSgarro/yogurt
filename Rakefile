task :default => [:css]

task :css do
	require "sass"
	Sass.compile_file "style/style.scss", "style/style.css"
	puts "Generated style.css"
end

