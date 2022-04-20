from flask import Flask, render_template,request
from flask_mysqldb import MySQL


app = Flask(__name__)

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'db_ankieta'
 
mysql = MySQL(app)

@app.route('/', methods = ['POST', 'GET'])
def ankieta():
    return render_template('ankieta.html')

    if request.method == 'POST':
        plec = request.form['plec']
        zawod = request.form['zawod']
        wyksztalcenie = request.form['wyksztalcenie']
        zamieszkanie = request.form['zamieszkanie']
        czy_wizyta = request.form['czy_wizyta']
        jak_czesto = request.form['jak_czesto']
        czy_NFZ = request.form['czy_NFZ']
        czy_prywatny = request.form['czy_prywatny']
        cursor = mysql.connection.cursor()
        cursor.execute(''' INSERT INTO tbl_ankieta VALUES(%s,%s)''',(plec,wiek,zawod,wykszalcenie,zamieszkanie,czy_wizyta,jak_czesto,czy_NFZ,czy_prywatny))
        mysql.connection.commit()
        cursor.close()
        return f"Done!!"

if __name__ == '__main__':
    app.run(debug=True)