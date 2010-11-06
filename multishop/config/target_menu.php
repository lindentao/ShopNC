<?xml version="1.0" encoding="utf-8" ?>
<root>
  <group>
    <name>member</name>
    <groupid>naver</groupid>
    <target>
      <name>{langHeadEditInfo}</name>
      <link>own_member.php</link>
    </target>
    <target>
      <name>{langHeadModiEmailAddress}</name>
      <link>own_member.php?action=email</link>
    </target>
    <target>
      <name>{langHeadModiPassword}</name>
      <link>own_member.php?action=password</link>
    </target>
  </group>
  <group>
    <name>collection</name>
    <groupid>naver</groupid>
    <target>
      <name>{langHeadBaby}</name>
      <link>own_collection.php?genre=product</link>
    </target>
    <target>
      <name>{langHeadShop}</name>
      <link>own_collection.php?genre=store</link>
    </target>
  </group>
  <group>
    <name>search</name>
    <groupid>search</groupid>
    <target>
      <name>{langHeadSeachBaby}</name>
      <link>product.php?action=search</link>
    </target>
    <target>
      <name>{langHeadSeachShop}</name>
      <link>shop.php?action=search</link>
    </target>
  </group>
  <group>
    <name>message</name>
    <groupid>naver</groupid>
    <target>
      <name>{langHeadInbox}</name>
      <link>own_message.php</link>
    </target>
    <target>
      <name>{langHeadSendBox}</name>
      <link>own_message.php?action=send</link>
    </target>
  </group>
  <group>
    <name>product</name>
    <groupid>InfoSelectorTarget</groupid>
    <target>
      <name>{langHeadAllBaby}</name>
      <link>product.php?action=all</link>
    </target>
    <target>
      <name>{langHeadCommend}</name>
      <link>product.php?action=list</link>
    </target>
    <!--<target>
      <name>二手物品</name>
      <link>own_message.php?action=send</link>
    </target>
    <target>
      <name>闲置宝贝</name>
      <link>own_message.php?action=send</link>
    </target>-->
  </group>
  <group>
    <name>rate</name>
    <groupid>InfoSelectorTarget</groupid>
    <target>
      <name>{langHeadIncomeAllAppraise}</name>
      <link>user_rate.php?userid={userid}{+}type=from</link>
    </target>
    <target>
      <name>{langHeadBuyAllAppraise}</name>
      <link>user_rate.php?userid={userid}{+}type=from{+}genre=b</link>
    </target>
    <target>
      <name>{langHeadSaleAllAppraise}</name>
      <link>user_rate.php?userid={userid}{+}type=from{+}genre=s</link>
    </target>
    <target>
      <name>{langHeadOtherAppraise}</name>
      <link>user_rate.php?userid={userid}{+}type=to</link>
    </target>
  </group>
</root>