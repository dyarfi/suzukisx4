<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Public_Controller {

	public function __construct() {
		parent::__construct();		
	}
    
    public function detail($detail='') {
        
        // Set detail 
        $field = $this->Content->findIdByUrl('page_menus', $detail, $lang);
        $detail = $this->Content->load('page_menus',$field->field_id);
        
        // Set data from page menus
        $data['detail'] = $detail;
        
        // Set data from page menus
        $data['upload_path'] = 'uploads/pagemenus/';
                
        // Set main template
		$data['main']       = 'page';
        
		// Set site title page with module menu
		$data['page_title'] =  lang('page') . ($field->subject ? ' - '.$field->subject : '');
		
		// Set meta description for html tags in template
		$this->meta_description = $this->clean_tags($field->text);
		
		// Load admin template
		$this->load->view('template/public/template', $this->load->vars($data));
		
	}
}

/* End of file site_page.php */
/* Location: ./application/controllers/site_page.php */