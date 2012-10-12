<?php
	$model       = $this->getModel();
	$allServices = $model->getAllServices();
	
	$catServList = $model->getCatServList();
	$siteStructure = $model->getAllServices();

?>
<div id="content">
	<div class="">
		<div class="align_right">
			<h1 class="font42px"><?php echo JText::_('SERVICES_TITLES');?></h1>
		</div>
	</div>	
						
	<div class="service service_bg1">
		<div id="site_structure">
			<div class="font24px"><?php echo $catServList[0]->title?></div>
					
			<div class="font16px service_block_title">
				<div class="service_block left">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[0]->id_service?>', '#site_structure');"><?php echo $siteStructure[0]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[1]->id_service?>', '#site_structure');"><?php echo $siteStructure[1]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[2]->id_service?>', '#site_structure');"><?php echo $siteStructure[2]->title?></a>
				</div>		
				<span class="clearer"></span>																		
			</div>	
			<span class="clearer"></span>
								
			<div class="service_block left">
				<div>
					<?php echo $siteStructure[0]->s_desc?>													
				</div>
			</div>
									
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[1]->s_desc?>							
				</div>							
			</div>
			
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[2]->s_desc?>	
				</div>
			</div>
			
			<span class="clearer"></span>
		</div>
					
		<div class="">
			<div id="design_text<?php echo $siteStructure[0]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[0]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure', '#design_text<?php echo $siteStructure[0]->id_service?>');"><?php echo $siteStructure[0]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[1]->id_service?>', '#design_text<?php echo $siteStructure[0]->id_service?>');"><?php echo $siteStructure[1]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[2]->id_service?>', '#design_text<?php echo $siteStructure[0]->id_service?>');"><?php echo $siteStructure[2]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[0]->desc?>	
				</div>	
			</div>
			
			<div id="design_text<?php echo $siteStructure[1]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[0]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure', '#design_text<?php echo $siteStructure[1]->id_service?>');"><?php echo $siteStructure[1]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[0]->id_service?>', '#design_text<?php echo $siteStructure[1]->id_service?>');"><?php echo $siteStructure[0]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[2]->id_service?>', '#design_text<?php echo $siteStructure[1]->id_service?>');"><?php echo $siteStructure[2]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[1]->desc?>	
				</div>	
			</div>

			<div id="design_text<?php echo $siteStructure[2]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[0]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure', '#design_text<?php echo $siteStructure[2]->id_service?>');"><?php echo $siteStructure[2]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[0]->id_service?>', '#design_text<?php echo $siteStructure[2]->id_service?>');"><?php echo $siteStructure[0]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[1]->id_service?>', '#design_text<?php echo $siteStructure[2]->id_service?>');"><?php echo $siteStructure[1]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[2]->desc?>	
				</div>	
			</div>
			
			<span class="clearer"></span>		
		</div>				
	</div>
	
	
	<!-- ************** -->
	
	<div class="service service_bg2">
		<div id="site_structure1">
				
			<div class="font24px service_block_title">
				<div class="service_block left">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[3]->id_service?>', '#site_structure1');"><?php echo $siteStructure[3]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[4]->id_service?>', '#site_structure1');"><?php echo $siteStructure[4]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[5]->id_service?>', '#site_structure1');"><?php echo $siteStructure[5]->title?></a>
				</div>		
				<span class="clearer"></span>																		
			</div>	
			<span class="clearer"></span>
								
			<div class="service_block left">
				<div>
					<?php echo $siteStructure[3]->s_desc?>													
				</div>
			</div>
									
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[4]->s_desc?>							
				</div>							
			</div>
			
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[5]->s_desc?>	
				</div>
			</div>
			
			<span class="clearer"></span>
		</div>
					
		<div class="">
			<div id="design_text<?php echo $siteStructure[3]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure1', '#design_text<?php echo $siteStructure[3]->id_service?>');"><?php echo $siteStructure[3]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[4]->id_service?>', '#design_text<?php echo $siteStructure[3]->id_service?>');"><?php echo $siteStructure[4]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[5]->id_service?>', '#design_text<?php echo $siteStructure[3]->id_service?>');"><?php echo $siteStructure[5]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[3]->desc?>	
				</div>	
			</div>
			
			<div id="design_text<?php echo $siteStructure[4]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure1', '#design_text<?php echo $siteStructure[4]->id_service?>');"><?php echo $siteStructure[4]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[3]->id_service?>', '#design_text<?php echo $siteStructure[4]->id_service?>');"><?php echo $siteStructure[3]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[5]->id_service?>', '#design_text<?php echo $siteStructure[4]->id_service?>');"><?php echo $siteStructure[5]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[4]->desc?>	
				</div>	
			</div>
                   
			<div id="design_text<?php echo $siteStructure[5]->id_service?>" class="hidden">	
                            
				<div class="font28px left padding_bottom2px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure1', '#design_text<?php echo $siteStructure[5]->id_service?>');"><?php echo $siteStructure[5]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[3]->id_service?>', '#design_text<?php echo $siteStructure[5]->id_service?>');"><?php echo $siteStructure[3]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[4]->id_service?>', '#design_text<?php echo $siteStructure[5]->id_service?>');"><?php echo $siteStructure[4]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[5]->desc?>	
				</div>	
			</div>
			
			<span class="clearer"></span>		
		</div>				
	</div>

	<!-- ************ -->

	<div class="service service_bg3">
		<div id="site_structure3">
			<div class="font24px"><?php echo $catServList[1]->title?></div>
					
			<div class="font16px service_block_title">
				<div class="service_block left">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[6]->id_service?>', '#site_structure3');"><?php echo $siteStructure[6]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[7]->id_service?>', '#site_structure3');"><?php echo $siteStructure[7]->title?></a>
				</div>
				<div class="service_block left margin_left35px">
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#design_text<?php echo $siteStructure[8]->id_service?>', '#site_structure3');"><?php echo $siteStructure[8]->title?></a>
				</div>		
				<span class="clearer"></span>																		
			</div>	
			<span class="clearer"></span>
								
			<div class="service_block left">
				<div>
					<?php echo $siteStructure[6]->s_desc?>													
				</div>
			</div>
									
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[7]->s_desc?>							
				</div>							
			</div>
			
			<div class="service_block left margin_left35px">
				<div>
					<?php echo $siteStructure[8]->s_desc?>	
				</div>
			</div>
			
			<span class="clearer"></span>
		</div>
					
		<div class="">
			<div id="design_text<?php echo $siteStructure[6]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[1]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure3', '#design_text<?php echo $siteStructure[6]->id_service?>');"><?php echo $siteStructure[6]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[7]->id_service?>', '#design_text<?php echo $siteStructure[6]->id_service?>');"><?php echo $siteStructure[7]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[8]->id_service?>', '#design_text<?php echo $siteStructure[6]->id_service?>');"><?php echo $siteStructure[8]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[6]->desc?>	
				</div>	
			</div>
			
			<div id="design_text<?php echo $siteStructure[7]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[1]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure3', '#design_text<?php echo $siteStructure[7]->id_service?>');"><?php echo $siteStructure[7]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[6]->id_service?>', '#design_text<?php echo $siteStructure[7]->id_service?>');"><?php echo $siteStructure[6]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[8]->id_service?>', '#design_text<?php echo $siteStructure[7]->id_service?>');"><?php echo $siteStructure[8]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[7]->desc?>	
				</div>	
			</div>

			<div id="design_text<?php echo $siteStructure[8]->id_service?>" class="hidden">	
				<div class="font28px left padding_bottom2px">
					<div class="font24px"><?php echo $catServList[1]->title?></div>
					<a href="javascript: void(0);" class="a_white_dashed" onclick="hideShow('#site_structure3', '#design_text<?php echo $siteStructure[8]->id_service?>');"><?php echo $siteStructure[8]->title?></a>
				</div>
				<div class="service_block right align_right">
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[6]->id_service?>', '#design_text<?php echo $siteStructure[8]->id_service?>');"><?php echo $siteStructure[6]->title?></a></div>
					<div class="margin_top10px"><a href="javascript: void(0);" class="a_white_dashed" onclick=" hideShow('#design_text<?php echo $siteStructure[7]->id_service?>', '#design_text<?php echo $siteStructure[8]->id_service?>');"><?php echo $siteStructure[7]->title?></a></div>
				</div>
				<span class="clearer"></span>
				<div class="our_work_text">
					<?php echo $siteStructure[8]->desc?>	
				</div>	
			</div>
			
			<span class="clearer"></span>		
		</div>				
	</div>
				
	</div>