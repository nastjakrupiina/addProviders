public function addProviders($arAdd)
	{
		if(empty(self::providersHL)) return false;
		if(empty($arAdd)) return false;
        $arResult = false;
		$this->HLload(self::providersHL);
		$copy = $this->getProviders('ID', array('UF_NAME' => $arAdd['UF_NAME'], 'UF_XML_ID' => $arAdd['UF_XML_ID']));

		if($copy){
			return "Поставщик уже существует";
		} else {
			$result = $this->strEntityDataClass::add($arAdd);
			if ($result->isSuccess()){
			    return $result->getId();
			} else {
			    return 0;
			}
			return $arResult;
		}
	}
