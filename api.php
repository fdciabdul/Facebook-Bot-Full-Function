<?php
function get($url){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $uaa = $_SERVER['HTTP_USER_AGENT'];

        curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");

        return curl_exec($ch);

  	}
function SendAnswer($message){

	  	$data = get('http://newapp.simsimi.com/v1/simsimi/talkset?uid=1&av=6.7.3.1&lc=vn&cc=US&tz=Asia%2FHo_Chi_Minh&os=a&message_sentence='.urlencode(ReplaceRequest($message)).'&isFilter=0');
	  	$data = json_decode($data, true);
	  	//return ReplaceResponse($data['simsimi_talk_set']['answers']['sentence']);
	  	echo ''.html_entity_decode(trim(strip_tags(ReplaceResponse($data['simsimi_talk_set']['answers'][0]['sentence']))), ENT_NOQUOTES, 'UTF-8').'';

	}

	function ReplaceRequest($data){

		$data = str_replace('Sen', 'simsimi', $data);
		return $data;

	}

	function ReplaceResponse($data){

		$data = str_replace(array('simsimi', 'simmi', 'simsi', 'simi', 'sim'), 'SexySim', $data);
		$data = str_replace(array('lồn', 'cặc','cu', 'đụ ','địt','buồi'), array('***', '***','***','***','***','***'), $data);
		$data = str_replace(array(''), array('Cài đặt Bot SimSimi Miễn Phí  Tại HotFB.Org','Em chưa được học câu này','Em không hiểu huhu','Cài đặt Bot SimSimi Miễn Phí  Tại HotFB.Org'), $data);
		return $data;

	}
	
  	echo SendAnswer($_GET['DS']);
?>