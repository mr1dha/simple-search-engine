import time
import sys
import json

class Kata:
    def __init__(self):
        self.dokumen = {}

class Dokumen:
    def __init__(self, tautan, judul, isi):
        self.url = tautan
        self.judul = judul
        self.isi = isi

kamus = {}
dokumen ={}
f=open("words_score.txt")
baris = f.readlines()

for i in baris:
    kata= i.split(" ")
    key = kata[0]
    kamus[key] = Kata()

    for j in range(1, len(kata)-1):
        temp = kata[j].split(":")
        kamus[key].dokumen[temp[0]] = float(temp[1])
f.close()
f=open("datadocs.txt", 'r')
line_docs = f.readlines()

for l in line_docs:
    docList = l.split(" :: ")
    link = docList[1]
    title = docList[2]
    content = docList[3]

    dokumen[docList[0]] = Dokumen(link, title, content)

banyak = int(sys.argv[1])
query= sys.argv[2].lower()

start = time.time()
querylist = query.split(" ")
result={}

for i in querylist: #simpan semua query ke dalam dictionary sebagai vektor query
    if i in kamus.keys():
        dokumenList = kamus[i].dokumen

        for j in dokumenList.keys():
            if j not in result.keys():
                result[j] = float(dokumenList[j])
            
            else:
                result[j]+= float(dokumenList[j])
finish = time.time()

print ("[")

nomor=1
for k, v in sorted(result.items(), key=lambda x:x[1], reverse=True):
    json_temp = json.dumps(dokumen[k].__dict__)
    print (json_temp+",")

    if nomor==banyak:
        break
    nomor+=1
print (json.dumps({"waktu" : round(finish-start, 4)}))

print ("]")
