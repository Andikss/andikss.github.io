WITH RankedContestants AS (
  SELECT
    event_id,
    CASE
      WHEN participant_name > 1 THEN
        FIRST_VALUE(participant_name) OVER (PARTITION BY event_id, score ORDER BY score DESC)
      ELSE
        participant_name
    END AS participant_name,
    score,
    DENSE_RANK() OVER (PARTITION BY event_id ORDER BY score DESC) AS ranking
  FROM
    scoretable 
)

SELECT
  event_id,
  MAX(CASE WHEN ranking = 1 THEN rank_list END) AS first,
  MAX(CASE WHEN ranking = 2 THEN rank_list END) AS second,
  MAX(CASE WHEN ranking = 3 THEN rank_list END) AS third
FROM (
  SELECT
    event_id,
    ranking,
    GROUP_CONCAT(participant_name ORDER BY participant_name ASC) AS rank_list
  FROM
    RankedContestants
  GROUP BY
    event_id, ranking
) AS ranked_data
GROUP BY
  event_id
ORDER BY
  event_id;
