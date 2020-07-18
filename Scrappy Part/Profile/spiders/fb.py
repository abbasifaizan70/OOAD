# -*- coding: utf-8 -*-
import scrapy
import json
import os


class FbSpider(scrapy.Spider):
    name = 'fb'
    allowed_domains = ['facebook.com']
    url=input("Enter URl of Fb Account : ")
    start_urls = [url]

    def parse(self, response):
        name=response.xpath('//span[@id="fb-timeline-cover-name"]/a/text()').extract_first()
        nick_name=response.xpath('//span[@id="fb-timeline-cover-name"]//span[@class="alternate_name"]/text()').extract_first()
        Address =response.xpath('//div[@id="pagelet_hometown"]//span[@class="_2iel _50f7"]//text()').extract()

        def listToString(s):  
            
            # initialize an empty string 
            str1 = " " 
            
            # return string   
            return (str1.join(s)) 

        Data={
            'Name':name,
            'Nick Name':nick_name,
        }

        Address=listToString(Address)
        Data.__setitem__('Address', Address)

        j=1
        ch='a'
        for i in range(27):
            experience=[]
            experience_details=[]
            if(i<=27):
                x = chr(ord(ch) + i) 
                z = 'u_0_' + x  


                test_experience = response.xpath('//*[@id="'+z+'"]//div[@class="_2lzr _50f5 _50f7"]//a/text()').extract_first()
                if test_experience:
                    experience.append(test_experience)
                    abc=('experience__'+str(j))
                    acd=listToString(experience)
                    Data.__setitem__(abc, acd) 
                else:
                    pass
                
                test_experience_details = response.xpath('//*[@id="'+z+'"]//div/text()').extract_first()
                if test_experience_details and test_experience:
                    experience_details.append(test_experience_details)
                    abc1=('experience_details__'+str(j))
                    acd=listToString(experience_details)
                    Data.__setitem__(abc1, acd)
                    j=j+1 

                else:
                    pass        
            else:
                pass  

        if os.path.exists("sample.json"):
            os.remove("sample.json")

        print(Data)
        with open("sample.json", "w") as outfile: 
            json.dump(Data, outfile)
