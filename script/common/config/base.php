<?php
	/**
	 * Site: https://yiiman.ir
	 * AuthorName: gholamreza beheshtian
	 * AuthorNumber:+989353466620 | +17272282283
	 * AuthorCompany: YiiMan
	 *
	 *
	 */
ini_set('xdebug.max_nesting_level', 1500);
	$listFile = fopen(__DIR__."/crmList.json", "r");
	$modules       = [];
	$components    = [];
	$libs          = [];
	$array=[];
	if (empty( $listFile) || !empty( $_GET['update'])){
		$modulesFolder = getFileList( $config['content_folder'] . '/modules' );
		$libFolder     = getFileList( $config['content_folder'] . '/lib' );
		$listFile = fopen(__DIR__."/crmList.json", "w");
		
		if ( ! empty( $modulesFolder ) ) {
			
			foreach ( $modulesFolder as $kModules => $vModule ) {
				if ( $vModule['type'] == 'dir' ) {
					$file            = $config['content_folder'] . '/modules/' . $vModule['name'] . '/config.php';
					$component_files = getFileList( $config['content_folder'] . '/modules/' . $vModule['name'] . '/components' );
				}
				if ( file_exists( $file ) && is_readable( $file ) ) {
					
					$Mconfig = include  $file;
					
					
					if ( $Mconfig ) {
						if ( in_array( 'common', $Mconfig['type'] ) ) {
							if (empty( $Mconfig['name'])){
								$Mconfig['name']=$vModule['name'];
								$Mconfig['name']=$vModule['name'];
							}
							$modules[ $Mconfig['name'] ] =
								[
									'class'=>'system\modules\\'.$vModule['name'].'\Module'
								];
							
							
						}
						/* < Load Module Components > */
						{
							$cname = 'system\modules\\'.$vModule['name'].'\Module';
//					echo '<pre>';
//					var_dump(new $cname(4));
//					die();
							
							
							if ( ! empty( $component_files ) ) {
								
								foreach ( $component_files as $kcom => $vcom ) {
									$vcom['name'] = str_replace( '.php', '', $vcom['name'] );
									$class        = $Mconfig['namespace'] . '\components\\' . $vcom['name'];


									$components[ $vcom['name'] ] =
										[
											'class' => $class
										];

									$components[ strtolower($vcom['name']) ] =
										[
											'class' => $class
										];

								}
								
							}
						}
						/* </ Load Module Components > */
					}
				}
			}
			
		}
		/* < Config Libraries > */
		{
			if ( ! empty( $libFolder ) ) {
				foreach ( $libFolder as $klib => $vlib ) {
					
					
					if ( $vlib['type'] == 'text/x-php' ) {
						
						
						$vlib['name'] = str_replace( '.php', '', $vlib['name'] );
						$file         = $config['content_folder'] . '/lib/' . $vlib['name'] . '.php';
						
						
					}
					if ( file_exists( $file ) && is_readable( $file ) ) {
						
						$class = 'system\lib\\' . $vlib['name'];
						
						
						$libs[ $vlib['name'] ] =
							[
								'class' => $class
							];
						
						$libs[ strtolower($vlib['name']) ] =
							[
								'class' => $class
							];


					}
					/* </ Load Module Components > */
					
				}
			}
		}
		/* </ Config Libraries > */
		if (!empty($modules)){
			$array['modulesCommon']=$modules;
		}
		if (!empty($libs)){
			$array['libs']=$libs;
		}
		if (!empty($components)){
			$array['components']=$components;
		}
		fwrite($listFile, json_encode( $array));
		fclose($listFile);
	}else{
		$array=json_decode(fread($listFile,10000000),true);
		if (!empty($array['modulesCommon'])){
			$modules=$array['modulesCommon'];
		}
		if (!empty($array['libs'])){
			$libs=$array['libs'];
		}
		if (!empty($array['components'])){
			$components=$array['components'];
		}
	}
	
	$modules['gridview']=['class'=>'\kartik\grid\Module'];
	$components_config = require_once realpath( __DIR__ . '/components.php' );
	$components        = array_merge( $components, $components_config, $libs );
	$components['I18N']=['class'=>'system\lib\I18N'];


