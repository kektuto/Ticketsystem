<?PHP
//namespace Ticketsystem\View;
class ViewCustomer {

	private function replaceSection($markerArray, $section) {
		$template = file_get_contents('../template/Customer/templateCustomer.html');

		$pos1 = strpos($template, $section) + strlen($section);
		$htmlSection1 = substr($template, $pos1);
		$pos2 = strpos($htmlSection1, $section);
		$htmlSection = substr($htmlSection1, 0, $pos2);
		$htmlSection = preg_replace("/\s+/", " ", $htmlSection);
		foreach($markerArray AS $marker => $value){
			$htmlSection = str_replace($marker, $value, $htmlSection);
		}
		return $htmlSection;
	}

	public function ViewCustomerTemplate($allSelects){
		$markerArray = array();
		if(is_array($allSelects)){
			foreach($allSelects as $key => $select){
				$markerArray[$key] = $select;
			}
		}
		return $this->replaceSection($markerArray, '#*#TEMPLATE_VIEWCUSTOMERS#*#');
	}

}

?>
