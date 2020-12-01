<?php
return array(
	"devtools-path"=>"Ubiquity",
	"info"=>array(),
	"display-cache-types"=>array(
			"controllers",
			"models",
			"translations"
			),
	"maintenance"=>array(
			"on"=>false,
			"modes"=>array(
					"maintenance"=>array(
							"id"=>"maintenance",
							"ref"=>"maintenance",
							"controller"=>"controllers\\MaintenanceController",
							"action"=>"index",
							"icon"=>"recycle",
							"title"=>"Maintenance mode",
							"message"=>"Our application is currently undergoing sheduled maintenance.<br>Thank you for your understanding.",
							"urls"=>"admin,Admin",
							"hosts"=>"",
							"ports"=>"",
							"until"=>"2020-11-30T09:20",
							"ck-active"=>false,
							"excluded"=>array(
									"urls"=>array(
											"admin",
											"Admin"
											),
									"ports"=>array(),
									"hosts"=>array()
									)
							)
					)
			),
	"git-macros"=>array(
			"Status"=>"git status",
			"commit & push"=>"git+add+.%0Agit+commit+-m+%22%3Cyour+message%3E%22%0Agit+push%0A",
			"checkout"=>"git+checkout+%3Cbranch-name%3E",
			"remove file from remote repository"=>"git+rm+--cached+%3Cfilename%3E%0Agit+commit+-m+%22Removed+file+from+repository%22%0Agit+push",
			"remove folder from remote repository"=>"git+rm+--cached+-r+%3Cdir_name%3E%0Agit+commit+-m+%22Removed+folder+from+repository%22%0Agit+push",
			"undo last commit (soft)"=>"git+reset+--soft+HEAD%5E",
			"undo last commit (hard)"=>"git+reset+--hard+HEAD%5E",
			"unstage file(s) from index"=>"git+rm+--cached+%3Cfile-name%3E",
			"stash & pull (overwrite local changes with pull)"=>"git+stash%0Agit+pull%0A"
			),
	"part1"=>array(
			"models",
			"routes",
			"controllers",
			"cache",
			"rest",
			"config"
			),
	"part2"=>array(
			"translate",
			"maintenance",
			"composer",
			"security",
			"acls",
			"git"
			)
	);