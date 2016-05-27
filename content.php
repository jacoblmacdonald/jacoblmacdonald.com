<?php
	class Project {
		function __construct($logo, $description, $images, $link, $color, $designer, $designer_link, $designer_color) {
			$this->logo = $logo;
			$this->description = $description;
			$this->images = $images;
			$this->link = $link;
			$this->color = $color;
			$this->designer = $designer;
			$this->designer_link = $designer_link;
			$this->designer_color = $designer_color;

			$this->color_copy_text();
		}

		function get_logo() {
			return strpos($this->logo, ".svg") !== FALSE ? load_svg("logos/" . $this->logo) : "<img src='/images/logos/" . $this->logo . "'>";
		}

		function color_copy_text() {
			$open = true;
			while(strpos($this->description, "%") !== FALSE) {
				$this->description = preg_replace("/%/", $open ? "<span style='color:$this->color;'>" : "</span>", $this->description, 1);
				$open = !$open;
			}
		}
	}

	$projects = [
		new Project(
			"53w53_logo.svg",
			"
				Architect Jean Nouvel's latest creation, %53W53,% is planned to be the next addition to Manhattan's skyline.
				At %1,050 feet%, situated next to the MoMA blocks from Central Park, the skyscraper will overlook midtown Manhattan.
				With one bedroom residences starting at %$3MM%, 53W53 offers many amenities for its residents, including a 65-foot lap pool and a golf simulator.
				<br><br>
				The website is designed with %imagery% heavily in mind. Although the building has only begun construction as of August 2015, a number of renderings
				were created to show its proposed %interiors% and impact on the %Manhattan skyline%. The website showcases these images in a grid on nearly every page,
				with brief captions and descriptions losely hidden. Limited availabilities are displayed with detailed downloadable %floorplans%.
				<br><br>
				%Frontend:% Jacob Macdonald and Rafael De Los Santos<br>
				%Backend:% Andrew Mbiam and Chong Guo
			",
			array("53w53_1.png", "53w53_2.png", "53w53_3.png", "53w53_4.png", "53w53_5.png"),
			"//www.53w53.com",
			"#CD9D67",
			"Pentagram",
			"//www.pentagram.com",
			"red"
		),
		new Project("gracefarms_logo.svg",
			"
				Developed by non-profit Grace Farms Foundation, %Grace Farms% is a natural environment located in New Canaan, Connecticut.
				The facility is dedicated to preserving the property and allowing people to &quot;experience %nature%, encounter the %arts%, pursue %justice%, foster %community%, and explore %faith%.&quot;
				Although 77 out of 80 acres on the property are being maintained in their natural state, the highlight of Grace Farms is its %River Building%, Designed by Pritzker Prize winning duo %SANAA%.
				The River Building, named after the building's flowing glass architecture, allows visitors to experience the surrounding nature without restriction.
				<br><br>
				The website, featuring over %25% pages of unique content, is equipped with dozens of galleries filled with rich %imagery% to capture the location's landscape, buildings, and history.
				Heavily influenced by the foundation's core %initiatives%, the website displays statistics, resources, and other information to further engage visitors.
				A complex calendar module integrates %events% seamlessly into the website, allowing users to plan visits and engage in the community.
				<br><br>
				%Frontend:% Jacob Macdonald, Ben Leonard<br>
				%Backend:% Andrew Mbiam
			",
			array("gracefarms_1.png", "gracefarms_2.png", "gracefarms_3.png", "gracefarms_4.png", "gracefarms_5.png", "gracefarms_6.png", "gracefarms_7.png"),
			"//www.gracefarms.org",
			"#FFAE3D",
			"Pentagram",
			"//www.pentagram.com",
			"red"
		),
		new Project("queensmuseum_logo.png",
			"
				The %Queens Museum%, located in Queens, New York, is an establishment dedicated to art, community, and education.
				Showcasing both %international% and %local% art with a wide variety of topics, its exhibitions focus largely on %cultural and ethnic diversity%, urban life, and artistic narrative.
				The museum also hosts a wide variety of %events%, including talks, family occasions, and education opportunities.
				<br><br>
				The website was built with the museum's diverse mission in mind. Exhibitions are housed prominantly on both the home page and a separate Exhibition page,
				but the majority of the site is dedicated to the museum's range of %events and school programs%. The site is built on %Wordpress% with a custom-made theme,
				providing a rich %frontend% and an easily updated %backend%, giving the museum a platform to show its constantly changing content.
				<br><br>
				%I did not build this site;% I have performed maintenance and updates since fall 2014.
			",
			array("queensmuseum_1.png", "queensmuseum_2.png", "queensmuseum_3.png", "queensmuseum_4.png"),
			"//www.queensmuseum.org",
			"#FFB81C",
			"Pentagram",
			"//www.pentagram.com",
			"red"
		),
		new Project("brittcobb_logo.png",
			"
				%Britt Cobb% is a designer and Associate Partner at %Pentagram% for Michael Bierut.
				He has worked on a wide variety of projects, including %graphic design, signage, and architecture.%
				<br><br>
				Britt's personal website was built with simplicity in mind, emphasizing %full-screen imagery% in galleries organized by project.
				It features a %Wordpress% core, allowing new projects, along with associated information and imagery, to be added on the fly.
				<br><br>
				%Frontend:% Rafael De Los Santos, Jacob Macdonald<br>
				%Backend:% Jacob Macdonald
			",
			array("brittcobb_1.png"),
			"//www.brittcobb.com",
			"#F92772",
			"Britt Cobb",
			"//www.brittcobb.com",
			"white"
		),
		new Project("22bond_logo.svg",
			"
				The teaser site for a new housing project in %SoHo%. More to follow.
				<br><br>
				%Frontend:% Jacob Macdonald, Rafael De Los Santos<br>
				%Backend:% Andrew Mbiam
			",
			array("22bond_1.png", "22bond_2.png"),
			"//www.22bond.com",
			"#CFB43E",
			"Pentagram",
			"//www.pentagram.com",
			"red"
		)
	];
?>