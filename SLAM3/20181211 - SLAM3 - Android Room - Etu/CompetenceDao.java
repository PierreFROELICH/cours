package fr.encsio.trobert.roomandro;

import android.arch.lifecycle.LiveData;
import android.arch.persistence.room.Dao;
import android.arch.persistence.room.Insert;
import android.arch.persistence.room.Query;

import java.util.List;

@Dao
public interface CompetenceDao {
    @Insert
    void insert(Competence competence);

    @Query("Delete from competence_table")
    void deleteAll();

    @Query("Select * from competence_table order by nomCompetence asc ")
    LiveData<List<Competence>> getToutesCompetences() ;
}
