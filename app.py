from flask import Flask,render_template, request
from flask_mysqldb import MySQL

app = Flask(__name__)

#dane podmienione
app.config['MYSQL_HOST'] = 'mysql.server'
app.config['MYSQL_USER'] = 'username'
app.config['MYSQL_PASSWORD'] = 'password'
app.config['MYSQL_DB'] = 'nazwa_bazy_danych'

mysql = MySQL(app)


#render plik html ankieta
@app.route('/')
def ankieta():
    return render_template('ankieta.html')

#pobieranie danych do bazyu danych
@app.route('/form', methods = ['POST', 'GET'])
def login():
    if request.method == 'GET':
        return "Prosze zaznaczyć wszystkie odpowiedzi"
#pobranie daynych
    if request.method == 'POST':
        wiek = request.form['wiek']
        plec = request.form['plec']
        zawod = request.form['zawod']
        wyksztalcenie = request.form['wyksztalcenie']
        zamieszkanie = request.form['zamieszkanie']
        czy_wizyta = request.form['czy_wizyta']
        jak_czesto = request.form['jak_czesto']
        czy_NFZ = request.form['czy_NFZ']
        czy_prywatny = request.form['czy_prywatny']
        potrzebna_innowacja = request.form['potrzebna_innowacja']
        gdzie_innowacje = request.form['gdzie_innowacje']
        suwak10 = request.form['suwak10']
        suwak11 = request.form['suwak11']
        suwak12 = request.form['suwak12']
        suwak13 = request.form['suwak13']
        suwak14 = request.form['suwak14']
        suwak15 = request.form['suwak15']
        suwak16 = request.form['suwak16']
        suwak17 = request.form['suwak17']
        suwak18 = request.form['suwak18']
        suwak19 = request.form['suwak19']
        suwak20 = request.form['suwak20']
        suwak21 = request.form['suwak21']
        suwak22 = request.form['suwak22']
#przesłanie danych
        cursor = mysql.connection.cursor()
        cursor.execute( 'INSERT INTO tb_ankietax(wiek,plec,zawod,czy_wizyta,jak_czesto,czy_NFZ,czy_prywatny,wyksztalcenie,zamieszkanie, potrzebna_innowacja, gdzie_innowacje,suwak10,suwak11,suwak12,suwak13,suwak14,suwak15,suwak16,suwak17,suwak18,suwak19,suwak20,suwak21,suwak22) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)',(wiek,plec,zawod,czy_wizyta,jak_czesto,czy_NFZ,czy_prywatny,wyksztalcenie,zamieszkanie, potrzebna_innowacja, gdzie_innowacje,suwak10,suwak11,suwak12,suwak13,suwak14,suwak15,suwak16,suwak17,suwak18,suwak19,suwak20,suwak21,suwak22))
        mysql.connection.commit()
        cursor.close()
        return render_template('thank.html')

if __name__ == '__main__':
    app.run(debug=True)
