<?php
	$ch = curl_init();	// cURL을 사용하기 위해 초기화하는 메서드. cURL 세션을 생성

	// curl_setopt(세션, 옵션, 값) : 생성된 cURL 세션의 옵션을 설정
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);	// SSL 인증서 검사 여부 설정
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		// 결과값을 받을 것인지 여부 설정
	curl_setopt($ch, CURLOPT_HEADER, 0);				// 헤더 정보 출력 여부 설정
	curl_setopt($ch, CURLOPT_URL, "http://www.khan.co.kr/rss/rssdata/it_news.xml");		// 접속할 url 주소 설정
	$url_source = curl_exec($ch);						// curl_exec() : cURL 세션을 실행
	curl_close($ch);									// curl_close() : cURL 세션을 종료

	echo $url_source;
?>
