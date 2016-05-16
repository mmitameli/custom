<?php


class MercadoPagoTest {

  static function getPublicKeyTest($site_id){
    $public_keys = array(
      "MLA" => "TEST-3a0f5da2-c8e4-41c0-901e-338f01f58e2c",
      "MLB" => "TEST-30abef69-9f1e-4e9c-8902-62a5c941ba8e",
      "MLM" => "TEST-fda12e26-c017-440d-8bd5-9537b36076bc",
      "MCO" => "TEST-cd1e674d-7ada-4eab-aa0f-97901cd85de6",
      "MLC" => "TEST-1e7e15ea-b95c-4c18-9b71-a2e33c4d974c",
      "MLV" => "TEST-42e8bb0b-4440-416f-9534-8404649136ae"
    );

    return $public_keys[$site_id];
  }

  static function getAccessTokenSellerTest($site_id){
    $access_tokens = array(
      "MLA" => "TEST-5065100305679755-012611-36d05dd89010a4e897c93ccacba22886__LA_LC__-201657914",
      "MLB" => "TEST-5575956555775329-032209-45a4c2384bd02f7606375af29c0b0ebd__LC_LD__-209264106",
      "MLM" => "TEST-8125048893657995-012611-971865e2db51654ac76a28b66ff6e174__LC_LD__-201658709",
      "MCO" => "TEST-8926119823541847-022316-89a07f0dbaeb094a9ebeb0741f364cb7__LA_LD__-201658731",
      "MLC" => "TEST-4301459443670481-022409-500160028f3e305c59f42c4e0e918629__LA_LC__-206913132",
      "MLV" => "TEST-5168834635263799-022312-943336e39e1b654ed455ecf1fa01cc26__LA_LD__-201655393"
    );
    return $access_tokens[$site_id];
  }

  static function getEmailBuyerTest($site_id){
    $emails_test = array(
      "MLA" => "test_user_40522467@testuser.com",
      "MLB" => "test_user_75091695@testuser.com",
      "MLM" => "test_user_89751801@testuser.com",
      "MCO" => "test_user_44237579@testuser.com",
      "MLC" => "test_user_87174229@testuser.com",
      "MLV" => "test_user_38279382@testuser.com"
    );

    return $emails_test[$site_id];
  }

}